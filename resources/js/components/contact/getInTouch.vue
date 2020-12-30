<template>
  <div class="col-12 col-lg-6 order-lg-first">
        <form v-if="!this.submitedForm" class="g-block__three-rounds bg-white p-4">
            
            <h4 class="d-flex flex-wrap"><strong>Get in touch</strong><i class="fas fa-envelope ml-auto"></i></h4>
            <hr>
            <div class="form-group">
                <label for="contactInputName">Full Name</label>
                <input v-model="fullName" class="form-control" type="text" name="inputName" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="contactInputMail">Email address</label>
                <input v-model="email" class="form-control" type="text" name="inputEmail" placeholder="Email address">
            </div>
            <div class="form-group">
                <label for="contactInputComment">Leave comment</label>
                <textarea v-model="comment" class="form-control" name="inputComment" placeholder="Leave comment"></textarea>
            </div>
            <div class="text-right mt-4">
                <input @click="sendEmail" class="btn btn-primary" value="Send" type="button"/>
            </div>

            <!--<div class="text-right mt-4">
                            <button class="btn btn-primary" type="submit">{{ __('Send') }}</button>
                        </div>-->
        </form>
        <div v-else class="g-block__three-rounds bg-white p-4">
            <h2>Thank you for your feedback! :)</h2>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            fullName : '',
            email : '',
            comment : '',
            responseMsg : '',
            submitedForm : false
        }   
    },
    methods: {
        sendEmail(){
            console.log('sending: '+this.fullName+', '+this.email+','+this.comment)
            //check if values not null/empty. do that in "smart way"

            const requestOptions = {
                method: "POST",
                headers: { "Content-Type": "application/json", "Accept": "application/json" },
                body: JSON.stringify({ 
                    name: this.fullName,
                    email: this.email,
                    comment: this.comment, })
            };
            fetch("/api/sendEmail", requestOptions)
                .then(response => response.json())
                .then(data => (this.responseMsg = data.message));

                this.submitedForm = true;

        }
    }
}
</script>

<style>

</style>