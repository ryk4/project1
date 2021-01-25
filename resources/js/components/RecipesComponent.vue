<template>
    <div>
        <div class="container pt-3">
            <div class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Recipes</li>
                
            </div>
        </div>
        <div class="container">
        <div class="row">
            <aside class="col-12 col-lg-3">
                <div class="py-3 sticky-top">
                    <h3>Filter</h3>
                    <div class="b-widget b-widget__search">
                        <form class="search-form" role="search" method="get">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for..."/><span class="input-group-append">
                      <button class="btn btn-primary px-3" type="button"><span>Go</span></button></span>
                            </div>
                        </form>
                    </div>
                    <h4>Categories</h4>
                    <div class="list-group">
                        
                        <a v-for="cat in this.categories" :key="cat.name" v-on:click="applyFilter($event,cat)"
                        v-bind:class="{'selectedCategory' : cat.selected}"
                        class="category list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        {{cat.name}}<span class="badge badge-pill text-white" :style="`background-color:#${cat.color}`">{{cat.total}}</span></a>
                        
                    </div>
                </div>
            </aside>
            <main class="col-12 col-lg-9">
                <div class="d-flex align-items-center"><span class="ml-auto mr-3">Sort by:</span>
                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                        <label class="btn btn-light active">
                            <input type="radio" name="sortBy" id="option1" checked @click="applySort('title')">A-Z
                        </label>
                        <label class="btn btn-light">
                            <input type="radio" name="sortBy" id="option2"  @click="applySort('favouriteCounter')"><i class="fas fa-heart" ></i>
                        </label>
                        <label class="btn btn-light">
                            <input type="radio" name="sortBy" id="option3"  @click="applySort('viewCounter')"><i class="fas fa-eye" ></i>
                        </label>
                    </div>
                </div>

                <!-- Recipes START -->
                <div v-if="recipesFetched" >
                    <div class="row">
                        <div class="b-card col-12 col-lg-6 col-xl-4" v-for="r in recipes.data" :key="r.id">
                    
                            <div class="b-card_inner" >
                                <div class="b-card_image" v-bind:style="`background-image:url(/storage/${r.image})`">
                                <a class="b-card_image-link" :href="`/recipe/${r.id}`"></a>
                                    <div class="b-card_image-info-top">
                                        <span class="g-badge" :style="`background-color:#${r.representative_color}`">{{r.name}}</span>
                                            
                                        <span class="g-views"><i class="fa fa-eye"></i>{{r.viewCounter}}</span>
                                        <span class="g-likes"><i class="fa fa-heart"></i>{{r.favouriteCounter}}</span></div>
                                    <div class="b-card_image-info-bottom">
                                        <h3 class="b-card_title"><a href="#">{{r.title}}</a></h3>

                                        <div class="b-card_text">
                                            <p>
                                                <span><i class="fas fa-clock"></i> {{r.cookTime}} mins, </span>
                                                <span><i class="fas fa-heartbeat"></i> {{r.calories}} calories</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <pagination :data="recipes" @pagination-change-page="fetchRecipesAPI" ></pagination>
                    </div>           
                </div>
                <div v-else class="row">
                    <p>Recipes not fetched yet.</p>
                </div>
            </main>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            event: null,
            recipes: {},
            recipesFetched : false,
            filterCategories: [],
            categories: [ //===change it so it fetches from api only once during mounted/created. along with count for each category
                /*{
                    name: 'Meat',
                    color : 'd44f68',
                    selected : false
                },
                {
                    name: 'Fish',
                    color : '7d6dad',
                    selected : false

                },
                {
                    name: 'Vegetarian',
                    color : '67d44f',
                    selected : false

                },
                {
                    name: 'Fruits',
                    color : 'e8a765',
                    selected : false

                },*/
            ],
            sortBy: 'title'

        }
    },
    mounted() {
        //as soon as mounted call api to fetch recipes
        this.fetchCategories();
        this.fetchRecipesAPI();

    },
    
    methods: {
        fetchRecipesAPI(page = 1){//if page not supplied, then 1
            console.log('fetching recipes again');

            //add categorie's names ONLY to a single array
            var categories = this.categories.filter(vals => vals.selected).map(element => element.name)

            axios.get('/api/recipes?page=' + page+'&category='+categories.join(',')+'&order='+this.sortBy)
            .then(res => {                
                this.recipes = res.data;

            });

            this.recipesFetched = true;
            
        },
        fetchCategories(){
            console.log('fetching categories');

            axios.get('/api/recipes/categories')
            .then(res => {       
                res.data.forEach(element => {
                    this.categories.push({
                        name : element.name,
                        color : element.representative_color,
                        selected: false,
                        total: element.total
                    })
                });

                //this.categories = res.data;

            });


            /*


            fetch(`/api/recipe/tags/${this.recipeID}`)
                .then(res => res.json())
                .then(res => {                
                    res.forEach(element => {
                        this.tags.push({
                            name : element.name,
                            description: element.description});
                    });    
                }) 

                */


        },
        applyFilter(event,value){
            
            this.hasError = true;

            console.log('if i need event:'+event)

            value.selected = !value.selected;

            this.fetchRecipesAPI()
        },
        applySort(sortBy){
            this.sortBy = sortBy;
            this.fetchRecipesAPI()
        }
    }
}
</script>

<style scoped>
    .category:hover{
        background-color: #e1e6ea;

    }
    .selectedCategory{
        background-color: #d2d9df;

    }
</style>