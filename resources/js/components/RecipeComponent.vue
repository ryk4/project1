<template>
    <div>
        <div class="container py-3">
            <div class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/recipes">Recipes</a></li>
                <li class="breadcrumb-item"><a href="#">Add simple tag</a></li>
                
                <li class="breadcrumb-item active">{{this.recipe.title}}</li>
            </div>

        </div>
        <article class="container g-block__three-rounds bg-white mb-3 p-md-5 p-3">               
                <description-component v-if="loaded" v-bind:recipe="recipe"></description-component>
                           
                <div class="row">
                    <steps-component v-if="loaded" v-bind:steps="stepsContent"></steps-component>
                    <ingredients-component v-if="loaded" v-bind:ingredientsInJson="ingredients" :recipeID="recipe.id"></ingredients-component>
                </div>
            </article>
    </div>
</template>

<script>

import DescriptionComponent from './recipePage/DescriptionComponent.vue'
import IngredientsComponent from './recipePage/IngredientsComponent.vue'
import StepsComponent from './recipePage/StepsComponent.vue'

export default {
  components: { DescriptionComponent, StepsComponent, IngredientsComponent },
  data: function() {
      return {
          recipe :{
              id: '',
              title: '',
              calories: '',
              protein: '',
              carbohydrates: '',
              fat: '',
              cookTime : 0,
              image : ''

          },
          stepsContent: '',
          ingredients: '',
          loaded: false

      }
  },
    mounted() {
        this.fetchArticle();


    },
    methods: {
         fetchArticle() {
            fetch(`/api/recipe/1`)
            .then(res => res.json())
            .then(res => {                
                this.recipe.id = res.id;
                this.recipe.title = res.title;
                this.recipe.calories = res.calories;
                this.recipe.protein = res.protein;
                this.recipe.carbohydrates = res.carbohydrates;
                this.recipe.fat = res.fat;
                this.recipe.cookTime = res.cookTime;
                this.recipe.image = res.image;

                this.stepsContent = res.steps;

                this.ingredients = res.ingredients;
                
                this.loaded = true;

            })

        },
        goTo(route) {
            window.location = route;
        }
    },
}
</script>

<style>

</style>