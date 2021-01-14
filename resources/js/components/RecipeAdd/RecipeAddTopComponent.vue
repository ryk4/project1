<template>
    <div class="card">
        <div class="card-header">
            Recipe details
        </div>
        <div class="card-body">
            <div class="row recipeDetails">
                <div class="inputArea col-lg-4">
                    <label for="titleInput">Title</label>
                        <input  class="form-control"  aria-describedby="titleHelp" :class="{ inputRequired: !$v.recipe.title.required }" v-model="recipe.title" @input="emitEvent()" placeholder="Enter title">
                        <div class="error" v-if="!$v.recipe.title.required">Required</div>
                        <div class="error" v-if="!$v.recipe.title.minLength">Title must have at least {{$v.recipe.title.$params.minLength.min}} letters.</div>
                        <div :data="$v.recipe.title" :options="{rootObjectKey: '$v.recipe.title', maxDepth: 2}"></div>        
                </div>
                <div class="inputArea col-lg-2">
                </div>
                <div class="inputArea col-lg-2">
                    <label>Calories</label>
                    <input  class="form-control" :class="{ inputRequired: !$v.recipe.calories.required }" v-model="recipe.calories" @input="emitEvent()" placeholder="Cals">
                    <div class="error" v-if="!$v.recipe.calories.required">Required</div>
                    <div class="error" v-if="!$v.recipe.calories.decimal">Not a number</div>
                    <div :data="$v.recipe.calories" :options="{rootObjectKey: '$v.recipe.calories', maxDepth: 2}"></div>         
                </div>
                <div class="inputArea col-lg-2">
                    <label>Cook time</label>
                    <input  class="form-control" v-model="recipe.cookTime" @input="emitEvent()"  :class="{ inputRequired: !$v.recipe.cookTime.required }" placeholder="in minutes">
                    <div class="error" v-if="!$v.recipe.cookTime.required">Required</div>
                    <div class="error" v-if="!$v.recipe.cookTime.between">Must be between {{$v.recipe.cookTime.$params.between.min}} and {{$v.recipe.cookTime.$params.between.max}}</div>
                    <div :data="$v.recipe.cookTime" :options="{rootObjectKey: '$v.recipe.cookTime', maxDepth: 2}"></div>  
                </div>
                <div class="inputArea col-lg-2">
                    <label>Portions</label>
                    <input  class="form-control" v-model="recipe.servings" @input="emitEvent()" placeholder="Servings" :class="{ inputRequired: !$v.recipe.servings.required }">
                    <div class="error" v-if="!$v.recipe.servings.required">Required</div>
                    <div class="error" v-if="!$v.recipe.servings.decimal">Not a number</div>
                    <div :data="$v.recipe.servings" :options="{rootObjectKey: '$v.recipe.servings', maxDepth: 2}"></div>  
                </div>
                <div class="inputArea col-lg-2">
                    <label>Carbohydrates</label>
                    <input  class="form-control" v-model="recipe.carbohydrates" @input="emitEvent()" :class="{ inputRequired: !$v.recipe.carbohydrates.required }" >
                    <div class="error" v-if="!$v.recipe.carbohydrates.required">Required</div>
                    <div class="error" v-if="!$v.recipe.carbohydrates.decimal">Not a number</div>
                    <div :data="$v.recipe.carbohydrates" :options="{rootObjectKey: '$v.recipe.carbohydrates', maxDepth: 2}"></div>  
                </div>
                <div class="inputArea col-lg-2">
                    <label>Protein</label>
                    <input  class="form-control" v-model="recipe.protein" @input="emitEvent()" :class="{ inputRequired: !$v.recipe.protein.required }">
                    <div class="error" v-if="!$v.recipe.protein.required">Required</div>
                    <div class="error" v-if="!$v.recipe.protein.decimal">Not a number</div>
                    <div :data="$v.recipe.protein" :options="{rootObjectKey: '$v.recipe.protein', maxDepth: 2}"></div>  
                </div>
                <div class="inputArea col-lg-2">
                    <label>Fat</label>
                    <input  class="form-control" v-model="recipe.fat" @input="emitEvent()" :class="{ inputRequired: !$v.recipe.fat.required }">
                    <div class="error" v-if="!$v.recipe.fat.required">Required</div>
                    <div class="error" v-if="!$v.recipe.fat.decimal">Not a number</div>
                    <div :data="$v.recipe.fat" :options="{rootObjectKey: '$v.recipe.fat', maxDepth: 2}"></div>  
                </div>
                <div class="inputArea col-lg-2">
                    <label>Sodium</label>
                    <input  class="form-control" v-model="recipe.sodium" @input="emitEvent()" disabled>
                    
                </div>
                <div class="inputArea col-lg-2">
                    <label>Fiber</label>
                    <input  class="form-control" v-model="recipe.fiber" @input="emitEvent()" disabled>
                </div>
                <div class="inputArea col-lg-2">
                    <label>Sugar</label>
                    <input  class="form-control" v-model="recipe.sugar" @input="emitEvent()" disabled>
                </div>
            </div>   
        </div>
    </div>
</template>

<script>

import { decimal,required, minLength, between } from 'vuelidate/lib/validators'

export default {
    name: 'recipe-add-top-component',
    data: function () {
        return {
            recipe: {
                //properties will go here. Defauklt values
                title: '',
                calories: null,
                cookTime: null,
                servings: 1,
                carbohydrates: null,
                protein: null,
                fat: null,
                sodium: null,
                fiber: null,
                sugar: null
            }
        }
    },
    validations: {
        recipe: {
            title: {
                required,
                minLength: minLength(5)
            },
            calories: {
                required,
                decimal
            },
            cookTime: {
                required,
                between: between(5, 150)
            },
            servings: {
                required,
                decimal
            },
            carbohydrates: {
                required,
                decimal
            },
            protein: {
                required,
                decimal
            },
            fat :{
                required,
                decimal
            }

        },
    },
    methods: {
        emitEvent(){
            console.log('!!!!! emiting top !!!!!');

            this.$emit('recipe-top', 
            { title:this.recipe.title , 
                calories:this.recipe.calories,
                cookTime:this.recipe.cookTime,
                servings:this.recipe.servings,
                carbohydrates:this.recipe.carbohydrates,
                protein:this.recipe.protein,
                fat:this.recipe.fat,
                sodium:this.recipe.sodium,
                fiber:this.recipe.fiber,
                sugar:this.recipe.sugar
            },this.$v.$invalid );
            

            console.log('Is invalid:'+this.$v.$invalid)
            //emit copmuted $v back to parent
        }
    }

}
</script>

<style>

    .inputArea{
        margin-bottom:30px;
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
    .submitCard{
        margin-bottom:20px;
    }

    .inputRequired{
        border-color:rgba(212, 38, 16, 0.932);
        
    }
    .error{
        color:rgba(212, 38, 16, 0.932);
    }

</style>