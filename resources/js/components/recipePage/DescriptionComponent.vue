<template >
    <div class="row">
        <!--<div class="col-12 col-md-6" ><img class="img-fluid mb-3" :src="`/images/recipes/${this.recipe.id}.jpg`" alt="HHH"></div>-->
        <div class="col-12 col-md-6" ><img class="img-fluid mb-3 imgSection" :src="`/storage${this.recipe.image}`" alt="HHH"></div>
        <div class="col-12 col-md-6">
            <h1>{{this.recipe.title}}</h1>
            <hr>
            <h4> Short info</h4>
            <p class="text-muted">
                <span><i class="fas fa-clock"></i> {{this.recipe.cookTime}} mins, </span>
                <span><i class="fas fa-heartbeat"></i> {{this.recipe.calories}} calories</span>
            <p class="text-muted">
                <span>{{this.recipe.protein}}g Protein, {{this.recipe.carbohydrates}}g Carbohydrates, {{this.recipe.fat}}g Fat</span>
            <p><strong>Autor : <a href="#">Rytis Klimavicius</a></strong></p>
            <hr><a v-on:click="AddFat" class="btn btn-primary mb-3" href="#"><i class="fas fa-bookmark mr-2"></i> bookmark</a>

        </div>
    </div>
</template>

<script>
    export default {
        name: 'description-component',
        data: function() {
            return {

            }
        },
        props: ['recipe'],
        methods: {
            AddFat(){
                console.log('adding Fat');
                this.recipe.fat += 5;
            },

        }
    }


</script>


<style scoped>
    .imgSection{
        width:100%;
        max-height: 500px;
    }

</style>