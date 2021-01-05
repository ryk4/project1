<template>
<form class="">



  <div class="form container pt-3">
    <div class="titleArea">
        <h2>Create new recipe</h2>
    </div><br>

    <div class="card">
        <div class="card-header">
            Information
        </div>
        <div class="card-body">
            <div class="row recipeDetails">
                <div class="inputArea col-lg-4">
                    <label for="titleInput">Title</label>
                    <input  class="form-control"  aria-describedby="titleHelp" v-model="recipe.title" placeholder="Enter title">        
                </div>
                <div class="inputArea col-lg-2">
                </div>
                <div class="inputArea col-lg-2">
                    <label>Calories</label>
                    <input  class="form-control" v-model="recipe.calories" placeholder="Cals">     
                </div>
                <div class="inputArea col-lg-2">
                    <label>Cook time (mins)</label>
                    <input  class="form-control" v-model="recipe.cookTime" value=20  >
                </div>
                <div class="inputArea col-lg-2">
                    <label>Portions</label>
                    <input  class="form-control" v-model="recipe.servings" placeholder="Servings" value=1 required>
                </div>
                <div class="inputArea col-lg-2">
                    <label>Carbohydrates</label>
                    <input  class="form-control" v-model="recipe.carbohydrates" >
                </div>
                <div class="inputArea col-lg-2">
                    <label>Protein</label>
                    <input  class="form-control" v-model="recipe.protein">
                </div>
                <div class="inputArea col-lg-2">
                    <label>Fat</label>
                    <input  class="form-control" v-model="recipe.fat">
                </div>
                <div class="inputArea col-lg-2">
                    <label>Sodium</label>
                    <input  class="form-control" v-model="recipe.sodium" disabled>
                </div>
                <div class="inputArea col-lg-2">
                    <label>Fiber</label>
                    <input  class="form-control" v-model="recipe.fiber" disabled>
                </div>
                <div class="inputArea col-lg-2">
                    <label>Sugar</label>
                    <input  class="form-control" v-model="recipe.sugar" disabled>
                </div>
            </div>   
        </div>
    </div>

    
    <div class="row recipeIngredients">
         <div class="inputArea col-lg-3">
            <label>Ingredient</label>
            <input v-model="ingredient.name" class="form-control" placeholder="Type ingredient">
        </div>
        <div class="inputArea col-lg-2">
            <label>Amount</label>
            <input v-model="ingredient.amount"  class="form-control" placeholder="amount">
        </div>
        <div class="inputArea col-lg-2"> 
            <label>Unit</label>
            <select v-model="ingredient.unit"  class="form-control">
                <option value='g' selected>g</option>
                <option value='ml'>ml</option>
                <option value='whole'>whole</option>
            </select>

        </div>
        <div class="inputArea col-lg-1"> 
            <label>Submit</label>
            <button type="button" v-on:click="ingredientAdd()" class="btn btn-primary">Add</button>
        </div>
        <div class="inputArea col-lg-4" v-if="this.ingredients.length">
            <label>Added ingredients:</label>
            <ul class="list-group">
                <li v-for="(ingredient, index) in this.ingredients" :key="index" class="list-group-item d-flex justify-content-between align-items-center"
                @click="ingredientRemove(index)">
                    {{ingredient.Name}}
                    <span class="badge badge-primary badge-pill" >{{ingredient.Quantity}} {{ingredient.Unit}}</span>
                </li>
                
            </ul>
        </div>      
    </div><br>

    <div class="row justify-content-md-center recipeStepsInterface">
        <div class="row col-11 mb-4">
            <div class="col col-lg-3">
                <label>Recipe Description</label>
            </div>
            <div class="col col-lg-9">
                    <textarea class="form-control" id="textAreaStage1" rows="2" v-model="steps.Description"></textarea>
            </div>
        </div>
        <div class="row col-11" v-for="(stage,index) in this.steps.Stages" :key="index">
            <div class="col col-lg-3  stepsColumn">
                <input  class="form-control" placeholder="Stage 1" v-model="stage.StageTitle">
            </div>
            <div class="col col-lg-7 stepsColumn">
                <textarea class="form-control" rows="2" v-model="stage.StageContent"></textarea>
            </div>
            <div class="col col-lg-2 stepsColumn">
                <button type="button" class="btn btn-primary" @click="removeStage(index)">Remove</button>
            </div>
        </div>
         <div class="row col-11">
            <button type="button" class="btn btn-light" v-on:click="addStage">Add Stage</button>
         </div>
    </div>

    <br>
    <div class="row recipeTags">
        <div class="col-lg-4">
            <label>Category</label>
            <div class="form-check">
            <input class="form-check-input" type="radio" id="meatButton" value="1"  v-model="mainCategory">
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
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>



    </div><br>
    <div class="submitArea">

            <input type="button" class="btn btn-primary mr-3" @click="submitButton" value="Create recipe" >
            <button type="button" class="btn btn-secondary" @click="cancelButton">Cancel</button>
            <button type="button" class="btn btn-warning" @click="testPrint">Test Print</button>

    </div>

  </div>
</form>
</template>

<script>
export default {
    data: function() {
        return {
            recipe: {
                //properties will go here
                title: '',
                calories: '',
                cookTime: null,
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
            description: '',
            ingredients: [],

            steps:{
                Title: 'Cooking Guide',
                Description: '',
                Stages:[
                    {
                        StageTitle: 'Stage 1',
                        StageContent: '',
                    },
                    {
                        StageTitle: 'Stage 2',
                        StageContent: '',
                    }
                ]
            }, 
            mainCategory: 1,
            optionalCategories: [],
            imageUrl: ''
        }

    },
    methods: {
        //ingrdients area
        ingredientAdd(){
            console.log('adding ingredient')
            console.log('vals:'+this.ingredient.name+','+this.ingredient.amount+','+this.ingredient.unit);
            this.ingredients.push({
              //  id: this.ingredient.id++,//used as key as
                Name: this.ingredient.name,
                Quantity: this.ingredient.amount,
                Unit: this.ingredient.unit
            })

            //reset fields
            this.ingredient.name = '';
            this.ingredient.amount = '';
            this.ingredient.unit = '';

        },
        ingredientRemove(ingredient){ //cant still be improved and moved directly into template
            this.ingredients.splice(ingredient,1);
        },
        //stages add
        addStage(){
            this.steps.Stages.push({              
                StageTitle: 'Stage'+(this.steps.Stages.length+1),
                StageContent: '',
            })
        },
        removeStage(stagesIndex){
            this.steps.Stages.splice(stagesIndex,1);
        },
        //
        cancelButton(){
            this.$confirm("Are you sure you want to leave?","","warning").then(() => {
                window.location.href = '/';
            });
        },
         submitButton(){            
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
        testPrint(){
            //print everything to log, purely for testing and to be removed afterwards
            console.log("=test button pressed= ")

            this.$alert("Recipe Successfully added!","","success");


        }
    },
    mounted() {
        console.log('add recipe component is mounted');
    }
}
</script>

<style scoped>
    .titleArea{
        text-align: center;
        margin:20px;
    }
    .inputArea{
        margin-bottom:30px;
    }
    .submitArea{
        text-align: center;
        margin-bottom:50px;
    }
    
    
    .recipeStepsInterface{
        margin-bottom: 40px;
    }
    .individualStep{
        margin: 10px 0 0px 0;

        border-radius: 10px;
    }
    .stepsColumn{
        padding:10px;
        
    }

</style>