<template>
<form class="">
    <div class="form container pt-3">
        <div class="titleArea">
            <h2>Create new recipe</h2>
        </div><br>
        
        <recipe-add-top-component @recipe-top="processTopForm"></recipe-add-top-component><br>
        <recipe-add-middle-component @recipe-middle="processMiddleForm"></recipe-add-middle-component><br>


        <div class="card submitCard">
            <div class="card-header">
                Tags and image
            </div>
            <div class="card-body">
                <div class="row recipeTags">
                    <div class="col-lg-4">
                        <label>Category</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="meatButton" value="1"  v-model="mainCategory" >
                        <label class="form-check-label" for="meatButton">
                            Meat
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="fishButton" value="2" v-model="mainCategory">
                        <label class="form-check-label" for="fishButton">
                            Fish
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="vegButton" value="3" v-model="mainCategory">
                        <label class="form-check-label" for="vegButton">
                            Vegetarian
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="fruitButton" value="4" v-model="mainCategory">
                        <label class="form-check-label" for="fruitButton">
                            Fruit
                        </label>
                        </div>
                    </div>
                    <div class="form-check col-lg-4">
                        <label>Optional tags</label>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="5" id="defaultCheck1" v-model="optionalCategories">
                        <label class="form-check-label" for="defaultCheck1">
                            Dairy
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="6" id="defaultCheck2" v-model="optionalCategories">
                        <label class="form-check-label" for="defaultCheck2">
                            High Protein
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="7" id="defaultCheck3" v-model="optionalCategories">
                        <label class="form-check-label" for="defaultCheck3">
                            High Carbohydrates
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="8" id="defaultCheck4" v-model="optionalCategories">
                        <label class="form-check-label" for="defaultCheck4">
                            Low Fat
                        </label><br>         
                        </div>         
                    </div>
                    <div class="form-check col-lg-4">
                        <div class="form-group">
                            <label>Recipe image</label>
                            <input type="file" class="form-control-file" id="file-input" @change="uploadImage($event)">
                        </div>
                    </div>
                </div><br>
                
            </div>
        </div>

        <div class="submitArea">
            <input type="button" class="btn btn-primary mr-3" @click="submitButton" value="Create recipe" >
            <button type="button" class="btn btn-secondary" @click="cancelButton">Cancel</button>
            <button type="button" class="btn btn-warning" @click="testPrint">Test Print</button>
        </div><br>
    </div>
</form>
</template>

<script>
import { required, minLength, between } from 'vuelidate/lib/validators'
import RecipeAddTopComponent from './RecipeAddTopComponent.vue'
import RecipeAddMiddleComponent from './RecipeAddMiddleComponent.vue'

export default {
  components: { RecipeAddTopComponent,RecipeAddMiddleComponent },
    data: function() {
        return {          
            //1
            recipe: {
                title: '',
                calories: '',
                cookTime: '',
                servings: null,
                carbohydrates: null,
                protein: null,
                fat: null,
                sodium: null,
                fiber: null,
                sugar: null
            },
            ingredient: {
                //binding to input areas
                name: '',
                amount: '',
                unit: ''
            },
            ingredients: [],
            description: '',
            steps:{
                //object definition in RecipeAddMidleComponent.vue
            }, 
            mainCategory : 1,
            optionalCategories: [],       
            image: null,
            submitStatus: null,
            validation: {
                isTopInvalid: true,
                isMiddleInvalid: true,
                isBottomInvalid: true
            }
        }

    },
    validations: {
        name: {
            required,
            minLength: minLength(4)
            },
    },
    methods: {
        processTopForm(recipeObj,isInvalid){
            //can this be removed???
            this.recipe = recipeObj;
            this.validation.isTopInvalid = isInvalid;
        },
        processMiddleForm(ingredients,steps){
            //can this be removed???
            this.ingredients = ingredients;
            this.steps = steps;
        },
        submitButton(){    // NEEDS TO BE OPTIMIZED / REWRITTEN        
            //body
            const recipe = { 
                title: this.recipe.title,
                ingredients: JSON.stringify(this.ingredients),
                image: "default img for now",
                steps: JSON.stringify(this.steps),
                calories: this.recipe.calories,
                protein: this.recipe.protein,
                carbohydrates: this.recipe.carbohydrates,
                fat: this.recipe.title.fat,
                servings: this.recipe.servings,
                cookTime: this.recipe.cookTime,
                categories: [this.mainCategory].concat(this.optionalCategories)//concat "main category" and optional categories into 1 array

            };
            //headers
            const headers = { 
                "Content-type": "application/json",
                "Accept": "application/json"
            };

           // let imageFile = new FormData();
           // imageFile.append('file', this.image);

            axios.post("/api/recipe/create", recipe, { headers })
                .then(response => {
                    //print response
                    this.$alert("Recipe Successfully added!","","success");
                    console.log('API success. response: ' + response.data.message );

                    //===================================================================forward back or add another one ? 
                    //custom event box

                })
                .catch(error => {//catch error
                    this.$alert("Error! (Add error msg)","","error");
                    console.log("Api post error: ", error.response.data);                   
                    
            });

        },
        cancelButton(){
            this.$confirm("Are you sure you want to leave?","","warning").then(() => {
                window.location.href = '/';
            });
        },
        uploadImage(event){
            console.log('selecting image')
            console.log('event='+event.target.files[0])
            this.image = event.target.files[0];
        },
        testPrint(){
            //print everything to log, purely for testing and to be removed afterwards
            console.log("=test button pressed= ")
            console.log("value: "+this.recipe.title)

            this.$v.$touch()
            if (this.$v.$invalid) {
                console.log("=error in validation= ")

                this.submitStatus = 'ERROR'
            } else {
                // do your submit logic here
                console.log("=no error in validation= ")

                this.submitStatus = 'PENDING'
                setTimeout(() => {
                this.submitStatus = 'OK'
                }, 500)
            }

        }   
    },
}
</script>

<style scoped>
    .titleArea{
        text-align: center;
        margin:20px;
    }
    
    .submitArea{
        text-align: center;
        margin-bottom:15px;
    }
    
</style>