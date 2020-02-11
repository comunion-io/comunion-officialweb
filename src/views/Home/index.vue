<template>
  <div class="home">
    <div class="main">
      <div class="bimg">
        <div class="zt">
          Comunion
        </div>

        <div class="zt">
          Do the Value Free to Flow !
        </div>
        <div class="txt">
          <p class="dl">
            Comunion is a decentralized organization (DAO) collaborative network, which reconstructs the organization and
          </p>

          <p class="dl">
            trading mode of the labor force through blockchain technology, so as to realize efficient distribution of global labor
          </p>

          <p class="dl">
            resources and free circulation, trading and accumulation of labor value like capital.
            <a href="#"><router-link to="/ComunionIntroduction">Learn more!</router-link>
            </a>
          </p>
        </div>

        
          <div class="tonow mobile_hide" :class="{'is_try_move':is_try_move}" @mouseenter="try_move_in()" @mouseleave="try_move_out()">
            <a href="http://dao.comunion.io/#/home" target="_blank">
            Try it now!
            </a>
          </div>
          <div class="tonow mobile_show" :class="{'is_try_move':is_try_move}" @mouseenter="try_move_in()" @mouseleave="try_move_out()" @click="show_m_pc()">
            Try it now!
          </div>
        
        <div class="arrow">
          <img src="@/assets/img/home/icon-arrow.png" alt="" />
        </div>
      </div>

      <div class="introduce" ref="introduce">
        <div class="ileft">
          <dl>
            <dt>For Startup Teams</dt>
            <div></div>
            <dd class="mobile_hide">
              - Quickly
              <a href="http://dao.comunion.io/#/create" class="" target="_blank">
                Create your DAO
              </a>
            </dd>
            <dd class="mobile_show">
              - Quickly
              <a href="javascript:void(0);" @click="show_m_pc()">
                Create your DAO
              </a>
            </dd>
            <dd>- Distribute Token to incentivize members</dd>
            <dd>- Initial Register Offering (IRO)</dd>
          </dl>
        </div>
        <div class="imiddle">
          <dl>
            <dt>For Freelancers</dt>
            <div></div>
            <dd class="mobile_hide">- <a href="http://dao.comunion.io/#/list" target="_blank">Join DAO for collaboration</a></dd>
            <dd  class="mobile_show">- <a href="javascript:void(0);" @click="show_m_pc()">Join DAO for collaboration</a></dd>
            <dd>- Complete tasks to earn money</dd>
            <dd>- Recruit teams and create self-owned organizations</dd>
          </dl>
        </div>
        <div class="mright">
          <dl>
            <dt>For Social Organizations</dt>
            <div></div>
            <dd>- Improve organizational decision-making efficiency</dd>
            <dd>- Transparent financial management</dd>
            <dd>- Extend organizational boundaries</dd>
          </dl>
        </div>
      </div>
    </div>
    <div class="m_pc" :class="{'is_m_pc':is_m_pc}">
      <div class="m_pc_box">
        <div class="m_pc_img">
          <img src="@/assets/img/home/m_pc.png" alt="">
        </div>
        <div class="m_pc_title">
          <p>Please use PC to visit:</p>
          <p class="cun">dao.comunion.io</p>
        </div>
        <div class="m_pc_btn" @click="close_m_pc()">
          <p>Confirm</p>
        </div>
        <div class="m_pc_btn_close" @click="close_m_pc()">
          <img src="@/assets/img/now/shape_2.png" alt="">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      scroll: '',
      screenHeight : window.innerHeight,
      is_try_move:false,
      is_m_pc:false,
    }
  },
  methods: {
    menu() {
      this.scroll = document.documentElement.scrollTop || document.body.scrollTop;
      this.screenHeight = window.innerHeight;
      if(this.$refs.introduce){
        var introduces = this.$refs.introduce.offsetTop;
        if((introduces>=this.scroll)&&(introduces<(this.screenHeight+this.scroll))){
          this.$refs.introduce.classList.add('down_up');
        }
      }
    },
    try_move_in(){
      this.is_try_move = !this.is_try_move;
    },
    try_move_out(){
      this.is_try_move = !this.is_try_move;
    },
    close_m_pc(){
      this.is_m_pc = !this.is_m_pc;
    },
    show_m_pc(){
      this.is_m_pc = !this.is_m_pc;
    }
  },
  mounted() {
    window.addEventListener('scroll', this.menu)
  }
};
</script>

<style scoped>
.home {
  width: 100%;
  background: rgba(0, 9, 62, 1);
}
.main {
  max-width: 1200px;
  margin: 0 auto;
}
.m_pc,.mobile_show{
  display: none;
}
.bimg {
  max-width: 1200px;
  background: url(../../assets/img/home/background.png) no-repeat center;
  background-size: 748px 748px;
  height: 749px;
  padding-top: 99px;
  margin-bottom: 20px;
  position: relative;
}
.bimg .zt {
  font-size: 40px;
  font-family: MicrosoftYaHei-Bold, MicrosoftYaHei;
  font-weight: bold;
  color: rgba(255, 255, 255, 1);
  line-height: 52px;
  text-align: center;
  -webkit-animation: down_up 1s ;
  animation: down_up 1s ;
}
.txt {
  max-width: 1200px;
  margin-top: 36px;
  margin-bottom: 120px;
  -webkit-animation: down_up 1s ;
  animation: down_up 1s ;
}
.dl {
  font-size: 18px;
  font-family: MicrosoftYaHeiLight;
  color: rgba(255, 255, 255, 0.6);

  text-align: center;
  padding-top: 24px;
}
.dl a {
  font-size: 18px;
  font-family: MicrosoftYaHeiLight;
  color: hsla(39, 97%, 71%, 1);
  line-height: 24px;
}

.tonow {
  margin: 0 auto;
  width: 224px;
  height: 52px;
  background: rgba(253, 204, 111, 1);
  border-radius: 27px;
  text-align: center;
  padding: 14px 57px;
  font-size: 18px;
  font-family: MicrosoftYaHei-Bold, MicrosoftYaHei;
  font-weight: bold;
  color: rgba(0, 9, 62, 1);
  line-height: 24px;
}
.zt {
  font-size: 40px;
  font-family: MicrosoftYaHei-Bold, MicrosoftYaHei;
  font-weight: bold;
  color: rgba(255, 255, 255, 1);
  line-height: 52px;
  margin: 0 auto;
}
.arrow {
  position: absolute;
  top: 85%;
  left: 50%;
  /* width: 100%;
  text-align: center;
  margin-top: 62px; */
  -webkit-animation: arrow 1.5s infinite 0s;
  animation: arrow 1.5s infinite 0s;
}

@-webkit-keyframes arrow {
  0% {
    top: 80%;
    opacity: 0;
  }
  50% {
    top: 85%;
    opacity: 1;
  }
  100% {
    top: 90%;
    opacity: 0;
  }
}


.introduce {
  width: 100%;
  height: 341px;
  display: flex;
  padding: 0 98px;
}
.introduce dt {
  font-size: 22px;
  font-family: Arial-BoldMT, Arial;
  font-weight: normal;
  color: rgba(121, 134, 242, 1);
  line-height: 20px;
}
.introduce dl div {
  width: 20px;
  height: 2px;
  background: rgba(123, 136, 255, 1);
  margin-top: 16px;
  margin-bottom: 24px;
}
.introduce dl dd {
  font-size: 14px;
  font-family: PingFangSC-Regular, PingFang SC;
  font-weight: 400;
  color: rgba(255, 255, 255, 0.8);
  line-height: 20px;
  padding-bottom: 20px;
}
.introduce a {
height: 20px;
  font-size: 14px;
  font-family: PingFangSC-Regular, PingFang SC;
  font-weight: 400;
  color: hsla(39, 97%, 71%, 1);
  line-height: 20px;
  letter-spacing: 1px;
}
.ileft dl dd:first-child {
  padding-bottom: 40px;
}
.ileft {
  margin-right: 72px;
}
.imiddle{
  margin-right: 72px;
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
.tonow {
  cursor: pointer;
}
.tonow a{
  font-size:18px;
  font-family:MicrosoftYaHei-Bold,MicrosoftYaHei;
  font-weight:bold;
  color:rgba(0,9,62,1);
  line-height:24px;
  width: 100%;
}


.is_try_move{
  -webkit-animation: btn_move 0.5s ;
  animation: btn_move 0.5s ;
  background: white;
}
@keyframes btn_move{
    0%{
      background: rgba(253, 204, 111, 1);
    }
    100%{
      background: white;
    }
}

.ileft dl dd a:hover,.imiddle dl dd a:hover{
  color: white;
}



@media screen and (max-width: 767px){
  .mobile_hide{
    display: none;
  }
  .mobile_show{
    display: block;
  }
  #app{
    position: relative;
  }
  .bimg{
    height: auto;
    width: 100%;
    padding-top: 80px;
    padding-bottom: 100px;
    background-size:cover;
  }
  .bimg .zt{
    font-size: 24px;
    line-height: 30px;
    padding-bottom: 30px;
  }
  .txt{
    display: none;
  }
  .introduce{
    height: auto;
    padding: 0 20px 60px;;
    display: block;
  }
  .ileft,.imiddle{
    margin-right: 0;
    padding-bottom: 60px;
  }
  .introduce dt{
    font-size: 16px;
    line-height: 20px;
  }
  .introduce dl dd{
    font-size: 12px;
    line-height: 16px;
    padding-bottom: 16px;
  }
  .is_m_pc{
    display: block;
    animation: 1s opacity2;
    -webkit-animation: 1s opacity2;
  }
  @keyframes opacity2{
    0%{opacity:0}
    100%{opacity:1;}
  }
  .m_pc{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:rgba(0,0,0,0.7);
    z-index: 99999;
  }
  .m_pc_box{
    max-width:250px;
    height:auto;
    background:rgba(255,255,255,1);
    box-shadow:0px 2px 8px 0px rgba(0,0,0,0.2);
    border-radius:4px;
    padding-top: 44px;
    padding-bottom: 31px;
    text-align: center;
    margin: auto;
    top: 200px;
    position:relative;
    animation: 1s opacity2;
    -webkit-animation: 1s opacity2;
  }
  .m_pc_box .m_pc_btn_close{
    position:absolute;
    right:10px;
    top: 10px;
    cursor: pointer;
  }
  .m_pc_box .m_pc_title p{
    font-size:16px;
    font-family:PingFangSC-Regular,PingFang SC;
    font-weight:400;
    color:rgba(0,0,0,1);
    line-height:24px;
  }
  .m_pc_box .m_pc_title{
    padding-bottom: 30px;
  }
  .m_pc_box .m_pc_btn{
    max-width: 150px;
    margin: auto;
    background: rgba(253,204,111,1);
    border-radius: 27px;
    padding: 10px 20px;
    cursor: pointer;
  }
  .m_pc_box .m_pc_btn p{
    font-size:14px;
    font-family:PingFang-SC-Heavy,PingFang-SC;
    font-weight:800;
    color:rgba(0,9,62,1);
    line-height:18px;
  }
  .m_pc_img{
    max-width: 120px;
    margin: auto;
    padding-top: 10px;
    padding-bottom: 15px;
  }
  .m_pc_img img{
    width: 100%;
    height: 100%;
  }
  .cun{
    font-weight: 500 !important;
  }
}
</style>
