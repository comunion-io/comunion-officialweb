<template>
  <div class="now_box">
    <div class="top">
      <div class="nleft">
        <!-- <img src="@/assets/img/now/logo.png" alt="" /> -->
      </div>
      <div class="nright">
        <img src="@/assets/img/indiviuals/ball.png" alt="" />
      </div>
    </div>
    <div class="mobile_top">
      <img src="@/assets/img/now/logo.png" alt="" />
    </div>
    <div class="mid">
      <div class="mtop down_up">
        <p>
          NOW is "No Office Workers", a holy place for people don't want to be
          office workers!
        </p>
      </div>
      <div class="mfloor down_up">
        <p>
          The official name of NOW is: Comunion NOW, which is initiated by the
          Comunion team and is aimed at office workers, freelancers,
          entrepreneurs, college students, and so on. Through the offline
          activities to help everyone grow together, to create individual
          values, to help you solve problems from office workers of the DAO
          community.
        </p>
      </div>
      <div class="mbutton">
        <p @click="show_join" :class="{'is_try_move':is_try_move}" @mouseenter="try_move_in()" @mouseleave="try_move_out()" >Join NOW instantly!</p>
      </div>
    </div>
    <div class="swapper">
      <div class="swapper_title">
        <p>Activities Show</p>
      </div>
      <div class="swapper_shuf">
        <el-carousel :interval="0" arrow="always" type="card" @change="((pre, next) =&gt; {changeFun(pre, next)})">
          <el-carousel-item v-for="(swapper,index) in swappers" :key="index">
            <div class="swapper_img">
              <img :src="swapper.url">
            </div>
          </el-carousel-item>
        </el-carousel>
      </div>
      <el-row type="flex" class="swapper_content" justify="center">
        <el-col :span="12" class="mobile_swapper_content">
          <!-- <p class="title">{{swappers[activeIndex].title}}</p> -->
          <p class="content">{{swappers[activeIndex].content}}</p>
        </el-col>
      </el-row>
    </div>
    <div class="join_page" ref="join_page">
      <div class="join_box">
        <div class="join_title">
          <p>Welcome to join us!!</p>
        </div>
        <div class="join_er">
          <img src="@/assets/img/now/erwei.png" alt="">
        </div>
        <div class="join_con">
          <p>Scan the QR code to add me on WeChat</p>
        </div>
        <div class="join_close" ref="join_close" @click="close_join">
          <img src="@/assets/img/now/shape_2.png" alt="">
        </div>
      </div>
    </div>
  </div>
  
</template>

<script>
export default {
  data(){
    return{
      swappers: [
        {url: require('../../assets/img/now/swapper_1.jpeg'),content: 'This is the first offline meet up of No Office Worker Alliance(Now).During the activity, the product specialist Tang Ren shared the major life change of becoming a “No office worker”. We discussed topics about “The value of individuals”, “DAO” and “Fusion growth”.'
        },
        {url: require('../../assets/img/now/swapper_2.png'),content:'The second offline meet up of No Office Worker Alliance(Now) was about the evolution of organisations. We invited He Yiqing, the expert in organisation evolution field as the sharing guest in this issue, to discuss , to discuss the new form of future organisation with us.'},
        {url: require('../../assets/img/now/swapper_3.jpeg'),content:'Welcome to the offline meet up of Communion! You can focus the Comunion Wechat official account to find specific event information and registration methods.'},
      ],
      activeIndex: 0,
      is_try_move:false,
    }
  },
  methods:{
    show_join:function(){ 
      this.$refs.join_page.style.display = 'block';
    },
    close_join:function(){
      this.$refs.join_page.style.display = 'none';
    },
    changeFun:function(pre, next){
      this.activeIndex = pre;
    },
    try_move_in(){
      this.is_try_move = !this.is_try_move;
    },
    try_move_out(){
      this.is_try_move = !this.is_try_move;
    }
  }
};
</script>

<style scoped>
.mobile_top{
  display: none;
}
.join_page{
    z-index: 9999999;
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:rgba(0,0,0,0.7);
}
.join_box{
  max-width:520px;
  height:auto;
  background:rgba(255,255,255,1);
  box-shadow:0px 2px 8px 0px rgba(0,0,0,0.2);
  border-radius:4px;
  padding-top: 44px;
  padding-bottom: 31px;
  text-align: center;
  margin: 10% auto;
  position:relative;
  animation: 1s opacity2;
  -webkit-animation: 1s opacity2;
}
.join_box .join_title p{
  font-size:26px;
  font-family:MicrosoftYaHei-Bold,MicrosoftYaHei;
  font-weight:bold;
  color:rgba(0,0,0,1);
  line-height:35px;
}
.join_box .join_er{
  padding-top: 29px;
}
.join_box .join_con{
  padding-top: 23px;
}
.join_box .join_con p{
  font-size:14px;
  font-family:ArialMT;
  color:rgba(155,155,155,1);
  line-height:16px;
}
.join_box .join_close{
  position:absolute;
  right:10px;
  top: 10px;
  cursor: pointer;
}

@keyframes opacity2{
    0%{opacity:0}
    100%{opacity:1;}
}



.now_box {
  background-color: hsla(231, 100%, 12%, 1);
}
.top {
  /* display: flex; */
  /* justify-content: space-around; */
  padding-top: 70px;
  position: relative;
}
.nleft img {
  width: 100%;
  height: 100%;
}
.nleft{
  height: 173px;
  display: inline-block;
  margin-right: 180px;
  width: 57%;
  background: url(../../assets/img/now/logo.png);
  background-repeat:no-repeat;
  background-position:20%;
}
.nright {
  position: absolute;
  top: 20px;
  right: 20%;
}
.nright img {
  width: 100%;
  height: 100%;
}


.mid {
  display: flex;
  flex-direction: column;
  max-width: 1200px;
  margin: auto;
  text-align: center;
  padding-top: 20px;
}
.mid .mtop{
  max-width: 1000px;
  margin: auto;
}
.mid .mtop p{
  text-align: left;
  font-size:26px;
  font-family:MicrosoftYaHei-Bold,MicrosoftYaHei;
  font-weight:bold;
  color:rgba(255,255,255,1);
  line-height:35px;
}
.mid .mfloor{
  max-width: 1000px;
  margin: auto;
  padding-top: 30px;
}
.mid .mfloor p{
  text-align: left;
  font-size:18px;
  font-family:MicrosoftYaHeiLight;
  color:rgba(255,255,255,0.6);
  line-height:36px;
}
.mid .mbutton{
  padding-top: 54px;
  cursor:pointer;
}
.mid .mbutton p{
  width:224px;
  height:52px;
  background:rgba(253,204,111,1);
  border-radius:27px;
  margin: auto;
  font-size:18px;
  font-family:MicrosoftYaHei-Bold,MicrosoftYaHei;
  font-weight:bold;
  color:rgba(0,9,62,1);
  line-height:24px;
  padding: 14px 24px 14px 17px;
}




.swapper{
  padding-top: 130px;
  padding-bottom: 120px;
  max-width: 1200px;
  margin: auto;
  text-align: center;
}
.swapper .swapper_title p{
  font-size:28px;
  font-family:ArialMT;
  color:rgba(121,134,242,1);
  line-height:32px;
}
.swapper .swapper_shuf{
  padding-top: 60px;
}
.swapper .swapper_content{
  padding-top: 24px;
}
.swapper .swapper_content .title{
  font-size:22px;
  font-family:PingFangSC-Medium,PingFang SC;
  font-weight:500;
  color:rgba(255,255,255,1);
  line-height:29px;
  text-align: justify;
}
.swapper .swapper_content .content{
  padding-top: 12px;
  font-size:14px;
  font-family:PingFangSC-Regular,PingFang SC;
  font-weight:400;
  color:rgba(255,255,255,0.6);
  line-height:25px;
  text-align: justify;
}
.down_up{
  -webkit-animation: down_up 1s ;
  animation: down_up 1s ;
}

@keyframes down_up{
    0%{
      opacity: 0;
      -webkit-transform: translate(-0,50px); /* Safari */
      transform: stranslate(-0,50px); /* 标准语法 */
    }
    100%{
      opacity: 1;
      -webkit-transform: translate(0,0px); /* Safari */
      transform: stranslate(0,0px); /* 标准语法 */
    }
}

.is_try_move{
  -webkit-animation: btn_move 0.5s ;
  animation: btn_move 0.5s ;
  background: white !important;
}
@keyframes btn_move{
    0%{
      background: rgba(253, 204, 111, 1);
    }
    100%{
      background: white;
    }
}

@media screen and (max-width: 767px){
  .top{
    display: none;
  }
  .now_box{
    position: relative;
    padding: 130px 20px 60px;
  }
  .mobile_top{
    display: block;
    position: absolute;
    width: 30%;
    top: 20px;
    left: -5%;
  }
  .mobile_top img{
    width: 100%;
  }
  .mid .mtop p{
    font-size: 16px;
    line-height: 20px;
    text-align: justify;
  }
  .mid .mfloor p{
    font-size: 12px;
    line-height: 24px;
    text-align: justify;
  }
  .mid .mbutton p{
    font-size: 14px;
    line-height: 18px;
    height: auto;
  }
  .swapper{
    padding-top: 70px;
  }
  .swapper .swapper_title p{
    font-size: 20px;
    line-height: 23px;
  }
  .swapper .swapper_shuf{
    padding-top: 24px;    
  }
  .mobile_swapper_content{
    width: 80%;
  }
  .swapper .swapper_content .title{
    font-size: 14px;
    line-height: 18px;
  }
  .swapper .swapper_content .content{
    font-size: 12px;
    line-height: 18px;
  }
  .swapper{
    padding-bottom: 0px;
  }
  .join_box{
    margin: 0 20px;
    top: 100px;
  }
}
</style>

<style>
  .swapper .swapper_shuf .swapper_img{
    height: 300px;
    text-align: center;
  }
  .swapper .swapper_shuf .swapper_img img{
    height: 100%;
    width: auto;
    margin: auto;
  }
  .el-carousel__item{
    background-color: transparent;
  }
  .el-carousel__mask{
    background-color: transparent;
  }
  .el-carousel__mask + .swapper_img{
    filter: blur(5px);
  }
  .is-active .swapper_img{
    filter: blur(0);
  }
  .el-carousel__indicators {
    display: none;
  }
  .el-carousel__arrow--right{
    right: 270px;
    background: url(../../assets/img/now/icon_right.png) no-repeat center 50%;
  }
  .el-carousel__arrow--left{
    left: 270px;
    background: url(../../assets/img/now/icon_left.png) no-repeat center 50%;
  }
  .el-carousel__arrow{
    width: 52px;
    height: 52px;
    border-radius: 0;
    /* background:rgba(255,255,255,0); */
    border:2px solid rgba(255,255,255,1);
  }
  .el-carousel__arrow .el-icon-arrow-left, .el-carousel__arrow .el-icon-arrow-right{
    display: none;
  }
  .el-carousel__item:nth-child(2n) {
    /* background-color: red; */
  }

  .el-carousel__item:nth-child(2n+1) {
  }
  @media screen and (max-width: 767px){
    .el-carousel__arrow{
      display: none;
    }
    .swapper .swapper_shuf .swapper_img{
      height: 200px;
    }
    .swapper .swapper_shuf .swapper_img{
      height: 200px;
    }
    .el-carousel__container{
      height: 200px;
    }
    
  }
</style>