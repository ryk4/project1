<template>
    <div class="col-12 col-lg-6 col-xl-8">     
        <h2>{{this.title}}</h2>
        <p>{{this.description}}</p>
        <div v-for="s in this.stages" :key="s.id">
            <div v-on:click="toggleCheckBox(s, $event)" class="d-flex align-items-center">
                <h6 class="col" data-toggle="collapse"  role="button" aria-expanded="true" >
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" :id="s.stageTitle">
                        <label class="b-list_item-title custom-control-label" >
                            <strong>{{s.stageTitle}}</strong>
                        </label>
                    </div>
                </h6>
            </div>
            <div  v-if="s.hidden" class="collapse show">
                <p>{{s.stageDescription}}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'steps-component',
    props: ['steps'], //we only need steps. no point passing entire object
    data: function () {
        return {
            id: 0, //to keep track in the for loop
            title: '',
            description: '',
            stages: [],
            fullStage: {
                id: 0, //to keep track in the for loop
                stageTitle: '',
                stageDescription: '',
                hidden: false
            }
        }
    },
    mounted() {
        this.ParseStepsMarkdown(this.steps)
    },
    methods: {
        toggleCheckBox(recipe,event){
            this.stages[recipe.id].hidden =  !this.stages[recipe.id].hidden;

        },
        ParseStepsMarkdown(preProcessed){
            //process steps

            var obj = JSON.parse(preProcessed)

            this.title = obj.Title;
            this.description = obj.Description;

            obj.Stage.forEach(element => {
                this.fullStage.stageTitle = element.StageTitle;
                this.fullStage.stageDescription = element.StageContent;
                this.stages.push({
                    id : this.id++,
                    stageTitle: element.StageTitle,
                    stageDescription: element.StageContent,
                    hidden: true });
            });
        }
    }
}
</script>

<style>

</style>