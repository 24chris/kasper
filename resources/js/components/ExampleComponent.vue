<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component. So I finally set this up, huh!!
                    </div>

                    <h1>Thank God!!</h1>


                    <h2>The Testing of the slider goes here</h2>
                    <vue-owl-carousel :items="3" :autoplay="true" :nav="true">
                        <div>Slide 1</div>
                        <div>Slide 2</div>
                        <div>Slide 3</div>
                    </vue-owl-carousel>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import VueOwlCarousel from 'vue-owl-carousel'

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
