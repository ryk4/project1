<template>
    <div>
        <article class="container g-block__three-rounds bg-white mb-3 p-md-5 p-3">
            
                <div class="Description">
                    <description-component v-if="loaded" v-bind:recipe="recipe"></description-component>
                </div>
                
                <div class="row">

                    <steps-component v-if="loaded" v-bind:steps="stepsContent"></steps-component>

                    <ingredients-component v-if="loaded" v-bind:ingredientsInJson="ingredients"></ingredients-component>
            
            
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
        console.log('Recipe component mounted after everything inside.');
         this.fetchArticle();


    },
     created() {
        console.log('created runs first. fetch recipe here')

    },
    methods: {
         fetchArticle() {
            console.log('running fetch article');
            fetch('/api/recipe/1')
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

            console.log('fetched all stuff ');

        }
    },
}
</script>

<style>

</style>