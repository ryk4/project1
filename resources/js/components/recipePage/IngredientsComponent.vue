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
        <div class="g-tag-list my-3"><a class="g-tag-list_item" href="#">fish</a><a class="g-tag-list_item" href="#">like a boss</a><a class="g-tag-list_item" href="#">salt</a></div>
        </div>
</template>

<script>
export default {
    name: 'ingredients-component',
    props: ['ingredientsInJson'],
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
            tag: {
                name: '',
                color: ''
            }
        }
    },
    mounted(){
        console.log('3. Ingredients component mounted.');
        this.ParseIngredients(this.ingredientsInJson);
    },
    methods: {
        ParseIngredients(jsonIngredients){

            console.log('=logic bef:'+jsonIngredients);

            var obj = JSON.parse(jsonIngredients);

            console.log('=logic aft:'+obj);


            obj.Ingredients.forEach(element => {
                this.ingredients.push({
                    id : this.ingredient.id++,
                    name : element.Ingredient,
                    quantity: element.Quantity,
                    unit: element.Unit });
            });
        },

    }
}
</script>

<style>

</style>