<template>
    <div>
        <rubik v-for="(level,index) in levels" :key="index" v-bind="level" >

        </rubik>
        <div v-if="levels[this.levels.length-1] !=null" class="position-absolute w-100 "  style="height: 100px" v-bind:style="{top:this.levels[this.levels.length-1].top+this.levels[this.levels.length-1].height+'px'}">

        </div>

    </div>
</template>

<script>


    import rubik from '../Component/rubik'
    export default {
        name: "menu",
        components:{
            rubik
        },
        data(){
            return{
                levels:[]
            }
        },
        created() {
            if (localStorage.getItem('category')==null){
                let URL = "http://172.20.10.5/api/menu";
                window.axios.get(URL).then(({data})=>{
                    this.levels = data;
                    localStorage.setItem('category',JSON.stringify(data));
                    console.log(localStorage.getItem('category'));
                    console.log(data);

                })
            }else{
                this.levels = JSON.parse(localStorage.getItem('category'));
                console.log(JSON.parse(localStorage.getItem('category')));
                console.log('2');
            }

        },

    }
</script>

<style scoped>

</style>
