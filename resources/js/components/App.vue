<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <router-link :to="'/'">Home Page</router-link>
                        <router-link :to="'/list'">List Page</router-link>
                        <router-link :to="'/details'">Details Page</router-link>
                        <br>
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            
            console.log('Component mounted.')
        },
        methods: {
            
        },
    }
</script>
