<template>
    <div class="container-fluid">
        <foodBox v-for="food in foods" :key="food.id" v-bind="food">

        </foodBox>
        <div  class="w-100 "  style="height: 100px">
        </div>
    </div>
</template>

<script>
    import foodBox from './../Component/foodBox'
    export default {
        name: "food",
        components:{
          foodBox
        },
        data(){
            return{
                foods:[]
            }
        },
        mounted() {
            let uri = `http://127.0.0.1:8000/api/food/${this.$route.params.category}`;
            window.axios.get(uri).then(({data})=>{
                this.foods = data;
                console.log(data);
            });
        }
    }
</script>

<style scoped>

</style>
