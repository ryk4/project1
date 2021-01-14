<template>
    <div class="card">
        <div class="card-header">
            Steps and Ingredients
        </div>
        <div class="card-body">
            <div class="row recipeIngredients">
                <div class="inputArea col-lg-3">
                    <label>Ingredient</label>
                    <input v-model="ingredient.name" class="form-control" placeholder="Type ingredient" @input="emitEvent()">
                </div>
                <div class="inputArea col-lg-2">
                    <label>Amount</label>
                    <input v-model="ingredient.amount"  class="form-control" placeholder="amount" @input="emitEvent()">
                </div>
                <div class="inputArea col-lg-2"> 
                    <label>Unit</label>
                    <select v-model="ingredient.unit"  class="form-control" @input="emitEvent()"> 
                        <option value='g' selected>g</option>
                        <option value='ml'>ml</option>
                        <option value='whole'>whole</option>
                    </select>

                </div>
                <div class="inputArea col-lg-1"> 
                    <label>Add(RM)</label>
                    <button type="button" v-on:click="ingredientAdd()" class="btn btn-primary" :disabled="ingredient.name == ''">Add</button>
                </div>
                <div class="inputArea col-lg-4" v-if="this.ingredients.length">
                    <label>Added ingredients:</label>
                    <ul class="list-group">
                        <li v-for="(ingredient, index) in this.ingredients" :key="index" class="list-group-item d-flex justify-content-between align-items-center"
                        @click="ingredientRemove(index)" @input="emitEvent()">
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
                            <textarea class="form-control" id="textAreaStage1" rows="2" v-model="steps.Description" @input="emitEvent()"></textarea>
                    </div>
                </div>
                <div class="row col-11" v-for="(stage,index) in this.steps.Stages" :key="index">
                    <div class="col col-lg-3  stepsColumn">
                        <input  class="form-control" placeholder="Stage 1" v-model="stage.StageTitle" @input="emitEvent()">
                    </div>
                    <div class="col col-lg-7 stepsColumn">
                        <textarea class="form-control" rows="2" v-model="stage.StageContent" @input="emitEvent()"></textarea>
                    </div>
                    <div class="col col-lg-2 stepsColumn">
                        <button type="button" class="btn btn-primary" @click="removeStage(index)" @input="emitEvent()">Remove</button>
                    </div>
                </div>
                <div class="row col-11">
                    <button type="button" class="btn btn-light" v-on:click="addStage" >Add Stage</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'recipe-add-middle-component',
    data: function(){
        return {
            ingredient: {
                //binding to input areas
                name: '',
                amount: '',
                unit: ''
            },
            ingredients: [],
            description: '',
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
        }
    },
    methods: {
        emitEvent(){
            //this event is called when modifying any of the input fields
            this.$emit('recipe-middle', this.ingredients,this.steps);
        },
        //ingrdients area
        ingredientAdd(){
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

            //emit here
            this.emitEvent();

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
    }
}
</script>

<style>

</style>