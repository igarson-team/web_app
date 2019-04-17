<template>
    <div  class="d-flex flex-row  justify-content-around CART FoodBoard p-2 margin foodBox" >



        <div class="d-flex flex-column justify-content-around col-2 text-center">
            <span class="fa fa-plus circleBTNPlus fs12" ></span>
            <div>4</div>
            <span class="fs12 fa fa-minus circleBTNMinus"></span>
        </div>



        <router-link  :to="{name:'detail',params:{id:id}}" class=" col-7 text-right">
            <div class="d-flex flex-row gold">
                <strong style="white-space: nowrap ; font-size: 3.5vw ">{{name}}</strong>
            </div>
            <div class="d-flex flex-row">
                <small class="fa fa-heart text-danger" >&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</small>
                <small class="text-secondary fs12">{{like}}</small>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <strong class="text-secondary ">قیمت : </strong>
                <strong class="text-secondary fs12">{{cost}}</strong>
                <strong class="text-secondary fs12"> &nbsp; تومان &nbsp; </strong>
            </div>
        </router-link>



        <router-link :to="{name:'detail',params:{id:id}}" class="col-3 ">
            <img src="../../../images/svg/003-meal.svg" class="portrait"  alt="">
        </router-link>
    </div>
</template>

<script>
    export default {
        name: "foodBox",
        props:['id','name','nameEN','category','explain','remain','category_id','like','cost','deliver_time'],
    }
</script>

<style scoped>
    .portrait {
        height: 75px;
        width: 50px;
        object-fit: cover;
    }
    .margin {
        margin-top: 5px;

        margin-bottom: 5px;
    }
    .gold{
        color: rgb(234, 182, 15);
    }
    .FoodBoard:nth-child(odd){
        border: 1px solid gold;
        border-radius: 5px 20px 5px;

    }
    .FoodBoard:nth-child(even){
        border: 1px solid gold;
        border-radius: 20px 5px 20px;
    }
    .CART{
        direction: rtl;
        max-height: 120px;
        height: 120px;
    }

</style>
