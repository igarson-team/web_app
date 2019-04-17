<template>
    <div>

        <div class="" >

            <router-view></router-view>

        </div>

        <div class="container" id="navbar">
            <div class="row justify-content-around text-center fixed-bottom"   style=" border: 1px solid rgb(234, 182, 15);   bottom: 0px; background: #e9e9e9">
                <!--//EAB60F-->

                    <router-link  :to="{name:'menu'}"  class="col-2 p-3"><img src="../../../images/svg/011-menu-1.svg" alt="" width="30px" height="30px"></router-link>
                    <div  class="col-2 p-3"><img src="../../../images/svg/001-search.svg" alt="" width="30px" height="30px"></div>
                    <div  class="col-2 p-3"></div>
                    <div  class="p-3" id="deliver"><img src="../../../images/svg/003-meal.svg" alt="" width="50px" height="50px"></div>
                    <div  class="col-2 p-3"><img src="../../../images/svg/009-love-letter.svg" alt="" width="30px" height="30px"></div>
                    <div  class="col-2 p-3"><img src="../../../images/svg/008-credit-card.svg" alt="" width="30px" height="30px"></div>


            </div>
        </div>

    </div>


</template>

<script>
    export default {
        name: "app",
        data(){
            return{
                useMobile:true
            }
        },
        mounted() {

            if($(window).width() > 769) {
                $("#navbar").empty();
                this.$router.push({name: 'mobile'});
                return false;
            }else{
                this.$router.push({name: 'menu'});
            }
        }
    }
</script>

<style>
    #deliver{
        position: absolute;
        border: 1px solid rgb(234, 182, 15);
        border-radius: 50%;
        top: -10px;
        background:#e9e9e9 ;
    }

</style>
