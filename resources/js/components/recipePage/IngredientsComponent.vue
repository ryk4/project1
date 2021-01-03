<template>
    <div class="col-12 col-lg-6 col-xl-4 flex-last">
        <div class="b-list b-list__bordered b-list__white">
            <h4>Ingredients</h4>
            <div v-for="ingredient in this.ingredients" :key="ingredient.id">
                <div class="b-list_item custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" >
                <label class="b-list_item-title custom-control-label" ><span>{{ingredient.name}}</span></label>
                <div class="b-list_item-value"><span>{{ingredient.quantity}} {{ingredient.unit}}.</span></div>
                </div>
            </div>
        </div>
        <div class="g-tag-list my-3">
            <span  v-for="tag in this.tags" :key="tag.name">
                <a class="g-tag-list_item" href="#">{{tag.name}}</a>        
            </span>
        </div>

    </div>
</template>

<script>
export default {
    name: 'ingredients-component',
    props: ['ingredientsInJson','recipeID'],
    data: function() {
        return{
            ingredients: [],
            ingredient: { //not actually needed, just for reference. object is built automatically when doing push()
                id: 0, 
                name: '',
                quantity: 0,
                unit: ''
            },
            tags: [],
            tag: { //not actually needed, just for reference. object is built automatically when doing push()
                name: '',
                description: ''
            }
        }
    },
    mounted(){
        this.ParseIngredients(this.ingredientsInJson);
        this.FetchAndParseTags();
    },
    methods: {
        ParseIngredients(jsonIngredients){

            var obj = JSON.parse(jsonIngredients);

            obj.forEach(element => {
                this.ingredients.push({
                    id : this.ingredient.id++,
                    name : element.Name,
                    quantity: element.Quantity,
                    unit: element.Unit });
            });
        },
        FetchAndParseTags(){
            //call api
            fetch(`/api/recipe/tags/${this.recipeID}`)
                .then(res => res.json())
                .then(res => {                
                    res.forEach(element => {
                        this.tags.push({
                            name : element.name,
                            description: element.description});
                    });    
                })        
        }
    }
}
</script>

<style>

</style>