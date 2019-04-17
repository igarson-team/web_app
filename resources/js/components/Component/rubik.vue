<template>
    <div>
        <router-link :to="{name:'food',params:{category:id}}" v-if="background[0]==='#'" class="position-absolute myBorder shadow " :style="{height:height+'px',width:width+'%',top:top+'px',left:left+'%',backgroundColor:background}" >
            {{background}}
        </router-link>
        <router-link :to="{name:'food',params:{category:id}}" v-else class="position-absolute cover myBorder shadow backgroundImg" :style="{height:height+'px',width:width+'%',top:top+'px',left:left+'%',backgroundImage:'url(../images/food/'+background+')' }" :data-back="background"  >

        </router-link>
    </div>
</template>

<script>

    export default {
        name: "rubik",
        props:['id','height','width','top','left','name','nameEN','background'],
        data(){
            return {

            }
        },
        methods:{

        },
        created(){
            var image = new Image();
            image.src='../images/food/food1'


        },
        mounted() {


        }

    }
</script>

<style scoped>
    .cover{
        background-position: center;
        background-attachment: initial;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .myBorder{
        margin-top: 5px; margin-bottom: 5px;
        border: 2px solid rgb(234, 182, 15);
        border-radius: 5px;
    }
    .shadow{
        -moz-box-shadow:    3px 3px 5px 6px rgb(234, 182, 15);
        -webkit-box-shadow: 3px 3px 5px 6px rgb(234, 182, 15);
        box-shadow:         3px 3px 5px 6px rgb(234, 182, 15);
    }
    .title{
        background: rgb(234, 182, 15);
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        color: #000;
    }
    .backgroundimg{
        background-blend-mode: hard-light;
    }
</style>
