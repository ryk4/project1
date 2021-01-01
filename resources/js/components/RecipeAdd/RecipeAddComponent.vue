<template>
<form class="">

  <div class="form container pt-3">
    <div class="titleArea">
        <h2>Create new recipe</h2>
    </div><br>
    <div class="row recipeDetails">
        <div class="inputArea col-lg-4">
            <label for="titleInput">Title</label>
            <input  class="form-control" id="titleInput" aria-describedby="titleHelp" placeholder="Enter title">        
        </div>
        <div class="inputArea col-lg-2">
            <label>Calories</label>
            <input  class="form-control" placeholder="Cals">     
        </div>
        <div class="inputArea col-lg-2">
            <label>Cook time (mins)</label>
            <input  class="form-control" id="cookTime" value=20  >
        </div>
        <div class="inputArea col-lg-2">
            <label>Portions</label>
            <input  class="form-control" id="portion" placeholder="Servings" value=1 required>
        </div>
        <div class="inputArea col-lg-2">
            <label>Carbohydrates</label>
            <input  class="form-control" >
        </div>
        <div class="inputArea col-lg-2">
            <label>Protein</label>
            <input  class="form-control" >
        </div>
        <div class="inputArea col-lg-2">
            <label>Fat</label>
            <input  class="form-control" >
        </div>
        <div class="inputArea col-lg-2">
            <label>Fat</label>
            <input  class="form-control" >
        </div>
        <div class="inputArea col-lg-2">
            <label>Sodium</label>
            <input  class="form-control" >
        </div>
        <div class="inputArea col-lg-2">
            <label>Fiber</label>
            <input  class="form-control" >
        </div>
        <div class="inputArea col-lg-2">
            <label>Sugar</label>
            <input  class="form-control">
        </div>
    </div><br><br>
    
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
                    {{ingredient.name}}
                    <span class="badge badge-primary badge-pill" >{{ingredient.amount}} {{ingredient.unit}}</span>
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
                    <textarea class="form-control" id="textAreaStage1" rows="2"></textarea>
            </div>
        </div>
        <div class="row col-11" v-for="(stage,index) in this.stages" :key="index">
            <div class="col col-lg-3  stepsColumn">
                <input  class="form-control" placeholder="Stage 1" v-model="stage.stageTitle">
            </div>
            <div class="col col-lg-7 stepsColumn">
                <textarea class="form-control" rows="2" v-model="stage.stageDescription"></textarea>
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
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Meat
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Fish
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            <label class="form-check-label" for="exampleRadios3">
                Vegetarian
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
            <label class="form-check-label" for="exampleRadios4">
                Fruit
            </label>
            </div>
            
        </div>
        <div class="form-check col-lg-4">
            <label>Optional tags</label>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Dairy
            </label><br>
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
                High Protein
            </label><br>
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
            <label class="form-check-label" for="defaultCheck3">
                High Carbohydrates
            </label><br>
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
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
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="button" class="btn btn-warning">Test Print</button>

    </div>

  </div>
</form>
</template>

<script>
export default {
    data: function() {
        return {
            recipeProperties: {
                //properties will go here
            },
            ingredient: {
                //binding to input areas
                name: '',
                amount: '',
                unit: ''
            },
            description: '',
            ingredients: [
               ],

            stages:[
                {
                    stageTitle: 'Stage 1',
                    stageDescription: '',
                },
                {
                    stageTitle: 'Stage 2',
                    stageDescription: '',
                }
            ], 
            category: '',
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
                name: this.ingredient.name,
                amount: this.ingredient.amount,
                unit: this.ingredient.unit
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
            this.stages.push({              
                stageTitle: 'Stage'+(this.stages.length+1),
                stageDescription: '',
            })
        },
        removeStage(stagesIndex){
            this.stages.splice(stagesIndex,1);
        },
        //
        cancelButton(){

        },
        submitButton(){
            //send request to POST api/recipes/add

            //check response
            
            
            onsole.log('redirecting');
            //redirect after everything is done
            //window.location.href = '/recipes';

        },
        testPrint(){
            //print everything to log, purely for testing and to be removed afterwards
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