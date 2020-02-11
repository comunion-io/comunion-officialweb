<template>
  <div class="comunionin">
    <div class="blogo">
      <div class="left_ball">
      </div>
      <div class="ball">
        <img src="@/assets/img/indiviuals/ball.png" alt="" />
      </div>
    </div>
    <div class="mobile_blogo">
      <img src="@/assets/img/indiviuals/logo.png" alt="">
    </div>
    <div class="com_desc">
      <p>
        Comunion is a decentralized organization (DAO) collaborative network
      </p>
      <p class="com_con">
        which reconstructs the organization and trading mode of labour force through blockchain technology, so as to realize efficient distribution of global labor resources and free circulation, trading and accumulation of labor value like capital.
      </p>
    </div>
    <div class="com_content">
      <div class="background">
        <div class="back_ball">
        </div>
        <div class="back_content">
          <p>Background</p>
        </div>
      </div>
      <el-row :gutter="23">
        <div class="bg">
          <el-col :xs="24" :sm="8" :md="8">
            <div class="bg_box">
              <div class="bg_border">
                <div class="bg_img">
                  <img src="@/assets/img/indiviuals/Problem1.png" alt="" />
                  <span>Problem</span>
                </div>
                <div class="bg_content" ref="bg_content1">
                  <dl>
                    <dt>Problem</dt>
                    <dd>AI and Automation may trigger massive unemployment</dd>
                    <dd>
                      High monopoly in various industries, excessive transaction and
                      innovation costs
                    </dd>
                    <dd>
                      Social stratification, less social mobility, increasing gap between
                      rich and poor
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </el-col>
          <el-col :xs="24" :sm="8" :md="8">
            <div class="bg_box">
              <div class="bg_border">
                <div class="bg_img">
                  <img src="@/assets/img/indiviuals/Origin1.png" alt="" />
                  <span>Origin</span>
                </div>
                <div class="bg_content" ref="bg_content2">
                  <dl>
                    <dt>Origin</dt>
                    <dd>
                      The traditional organization and transaction model of labor put
                      shareholder's interest first, and a centralized employment structure
                      is the only form for workers to realize their value.
                    </dd>
                    <dd>
                      This causes capital revenue much grater than labor income. and labor
                      income is respectively becoming less and less, Labours trapped in a
                      downward spiral that the harder they work, the poorer they are.
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </el-col>
          <el-col :xs="24" :sm="8" :md="8">
            <div class="bg_box">
              <div class="bg_border">
                <div class="bg_img">
                  <img src="@/assets/img/indiviuals/Trend1.png" alt="" />
                  <span>Problem</span>
                </div>
                <div class="bg_content" ref="bg_content3">
                  <dl>
                    <dt>Evolution</dt>
                    <dd>
                      Transfer from traditional centralized organizations to decentralized
                      autonomous organization advocates individualism.
                    </dd>
                    <dd>
                      Digital nomads and freelancers are becoming individuals
                    </dd>
                    <dd>
                      The new identity of workers
                    </dd>
                    <dd>Individualism awareness among 95s and 00s younger</dd>
                    <dd>No Office Worker has become a new slogan for workers</dd>
                  </dl>
                </div>
              </div>
            </div>
          </el-col>
        </div>
      </el-row> 
      
      <div class="vision">
        <div class="vision_title">
          <p>Vision & Mission</p>
        </div>
        <el-row :gutter="30">
          <div class="vision_content">
            <el-col :xs="24" :sm="12" :md="12" >
            <div class="vleft">
              <img src="@/assets/img/indiviuals/vision.png" alt="" />
            </div>
            </el-col>
            <el-col :xs="24" :sm="12" :md="12" >
            <div class="vright" ref="right">
              <div>
                <dl>
                  <dt>Our Mission</dt>
                  <dd>Build a global Labour trading network</dd>
                  <dd>Link each labor together, matching each labor deal</dd>
                </dl>
              </div>
              <div>
                <dl>
                  <dt>Our Vision</dt>
                  <dd>
                    Let labor value flow, accumulate and trade freely like capital!
                  </dd>
                </dl>
              </div>
            </div>
            </el-col>
          </div>
        </el-row>
      </div>
      <div class="floor">
          <div class="fhead">
              <p>Comunion VS Traditional Organizations</p>
          </div>
          <div class="ffloor">
              <table>
                  <thead> 
                    <tr>
                      <th></th>
                      <th>Comunion</th>
                      <th>Traditional Organizations</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td></td>
                        <td>BoldMT</td>
                        <td>Traditional Organizations</td>
                    </tr>
                    <tr>
                        <td>Organization registration</td>
                        <td>Blockchain</td>
                        <td>Register in Supervision Authorities in corresponding countries</td>
                    </tr>
                    <tr>
                        <td>Share issuance</td>
                        <td>Issuing token</td>
                        <td>Equity</td>
                    </tr>
                    <tr>
                        <td>Equity flowing</td>
                        <td>Free flow, unlimited</td>
                        <td>Restricted flow, strong restriction</td>
                    </tr>
                    <tr>
                        <td>Task execution</td>
                        <td>Free collaboration, unlimited</td>
                        <td>Hire employee</td>
                    </tr>
                    <tr>
                        <td>Financing channel</td>
                        <td>Everyone can invest</td>
                        <td>Private Equity, Strong restriction</td>
                    </tr>
                    <tr>
                        <td>Pay settlement</td>
                        <td>Token</td>
                        <td>Cash/Stocks</td>
                    </tr>
                    <tr>
                        <td>Operation cost</td>
                        <td>Low</td>
                        <td>High</td>
                    </tr>
                    <tr>
                        <td>Governance mechanis</td>
                        <td>Token Stakeholder</td>
                        <td>Shareholders/Board of Directors</td>
                    </tr>
                    <tr>
                        <td>income distribution</td>
                        <td>Token Stakeholder</td>
                        <td>Shareholders</td>
                    </tr>
                  </tbody>
              </table>
          </div>
          <div class="trynow mobile_hide">
              <a href="http://dao.comunion.io/#/home" target="_blank"><p :class="{'is_try_move':is_try_move}" @mouseenter="try_move_in()" @mouseleave="try_move_out()">Try it now !</p></a>
          </div>
          <div class="trynow mobile_show">
              <a href="javascript:void(0);"  @click="show_m_pc()"><p :class="{'is_try_move':is_try_move}" @mouseenter="try_move_in()" @mouseleave="try_move_out()">Try it now !</p></a>
          </div>
      </div>
    </div>
    <div class="m_pc" :class="{'is_m_pc':is_m_pc}">
      <div class="m_pc_box">
        <div class="m_pc_img">
          <img src="@/assets/img/home/m_pc.png" alt="">
        </div>
        <div class="m_pc_title">
          <p>Please use PC to visit.</p>
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

      if(this.$refs.bg_content1){
      var bg_content1 = this.$refs.bg_content1.offsetTop;
      if((bg_content1>=this.scroll)&&(bg_content1<(this.screenHeight+this.scroll))){
        this.$refs.bg_content1.classList.add('down_up');
      }
      }

      if(this.$refs.bg_content2){
      var bg_content2 = this.$refs.bg_content2.offsetTop;
      if((bg_content2>=this.scroll)&&(bg_content2<(this.screenHeight+this.scroll))){
        this.$refs.bg_content2.classList.add('down_up');
      }
      }

      if(this.$refs.bg_content3){
      var bg_content3 = this.$refs.bg_content3.offsetTop;
      if((bg_content3>=this.scroll)&&(bg_content3<(this.screenHeight+this.scroll))){
        this.$refs.bg_content3.classList.add('down_up');
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
.mobile_blogo,.bg_img span,.mobile_show,.m_pc{
  display: none;
}
.clean{
  clear: both;
}
.comunionin {
  background-color: hsla(231, 100%, 12%, 1);
}
.blogo {
  padding-top: 40px;
}
.blogo .left_ball{
  height: 173px;
  display: inline-block;
  margin-right: 180px;
  width: 57%;
  background: url(../../assets/img/indiviuals/logo.png);
  background-repeat:no-repeat;
  background-position:100%;
}

.blogo .ball{
  display: inline-block;
}
.blogo img {
  width: 100%;
  height: 100%;
}
.ball img {
  width: 100%;
  height: 100%;
}


.com_content{
  max-width: 1200px;
  margin: auto;
  text-align: center;
}



.background{
  clear: both;
  padding-top: 60px;
}
.background .back_ball{
  width: 100%;
  height: 63px;
  background: url(../../assets/img/indiviuals/ball2.png);
  background-repeat:no-repeat;
  background-position:30%;
}
.background .back_content p{
  color: #7986F2;   
  font-size: 28px;
  line-height: 32px;
}

.bg{
  padding-top: 64px;
  padding-left: 60px;
  padding-right: 60px;
}
.bg .bg_box{
  min-height: 509px;
  float: left;
}
.bg .bg_box .bg_border{
  box-shadow:5px 10px 30px 0px rgba(1,7,40,0.8);
  min-height: 509px;
  padding: 41px 30px 0 30px;
  background:rgba(0,15,109,1);
  border-radius: 6px;
}
.bg .bg_box .bg_border .bg_img{
  text-align: left;
  padding-bottom: 20px;
}
.bg .bg_box .bg_border .bg_content{
  text-align:left;
}
.bg .bg_box .bg_border .bg_content dt{
  color: #FFFFFF;
  font-size: 24px;
  line-height: 29px;
  font-weight:500;
  font-family:PingFangSC-Medium,PingFang SC;
  padding-bottom: 16px;
}
.bg .bg_box .bg_border .bg_content dd{
  font-size:14px;
  font-family:PingFangSC-Regular,PingFang SC;
  font-weight:400;
  color:rgba(255,255,255,0.6);
  line-height:20px;
  padding-bottom: 20px;
}

.vision{
  clear: both;
  padding-top: 160px;
}
.vision .vision_title p{
  font-size:28px;
  font-family:ArialMT;
  color:rgba(121,134,242,1);
  line-height:32px;
  padding-bottom: 50px;
}
.vision .vision_content{
  width: 80%;
  margin: auto;
}
.vision .vision_content .vleft{
  width:100%;
  padding: 20px;
  height:auto;
  background:rgba(0,15,109,0.3);
  float: left;
}
.vision .vision_content .vright{
  float: left;
  text-align: left;
  padding-left: 30px;
  padding-top: 16px;
}
.vision .vision_content .vright dt{
  font-size:22px;
  font-family:PingFangSC-Medium,PingFang SC;
  font-weight:500;
  color:rgba(255,255,255,1);
  line-height:29px;
  padding-bottom: 12px;
}
.vision .vision_content .vright div:nth-child(2){
  padding-top: 40px;
}
.vision .vision_content .vright dd{
  font-size:14px;
  font-family:PingFangSC-Regular,PingFang SC;
  font-weight:400;
  color:rgba(255,255,255,0.6);
  line-height:25px;
}
.vleft img{
  width: 100%;
  height: 100%;
}


.floor{
  clear: both;
  max-width: 1200px;
  margin: auto;
  padding-top: 160px;
  background: url(../../assets/img/indiviuals/map.png);
  background-repeat:no-repeat;
  background-position: 10%;
}
.floor .fhead{
  padding-top: 32px;
  background: url(../../assets/img/indiviuals/ball3.png);
  background-repeat:no-repeat;
  background-position:90%;
  padding-bottom: 50px;
}
.floor .fhead p{
  font-size:28px;
  font-family:ArialMT;
  color:rgba(121,134,242,1);
  line-height:32px;
}
.floor .ffloor{
  max-width: 1000px;
  margin: auto;
  padding-bottom: 80px;
}
.floor .ffloor table{
  width: 100%;
  border-collapse: collapse;
}
.floor .ffloor table tr th,.floor .ffloor table tr td{
  font-size:14px;
  font-family:Arial-BoldMT,Arial;
  font-weight:normal;
  color:rgba(255,255,255,1);
  line-height:18px;
  padding: 20px 0;
  text-align: left;
}
.floor .ffloor table tr{
  border-bottom: 1px solid rgba(255,255,255,0.1);
}
.floor .ffloor table thead tr{
  border-bottom: 1px solid rgba(255,255,255,0.4); 
}
.floor .ffloor table tr td:nth-child(1){
  width: 30%;
}
.floor .trynow{
  padding-bottom: 130px;
}
.floor .trynow p{
  padding: 14px 58px;
  font-size:18px;
  font-family:MicrosoftYaHei-Bold,MicrosoftYaHei;
  font-weight:bold;
  color:rgba(0,9,62,1);
  line-height:24px;
  width:224px;
  height:52px;
  background:rgba(253,204,111,1);
  border-radius:27px;
  margin: auto;
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

.com_desc{
  max-width: 1000px;
  margin: auto;
  padding-top: 30px;
}

.com_desc p{
  text-align: justify;
  font-size:26px;
  font-family:MicrosoftYaHei-Bold,MicrosoftYaHei;
  font-weight:bold;
  color:rgba(255,255,255,1);
  line-height:35px;
}

.com_con{
  padding-top: 30px;
  font-size: 18px !important;
  font-family: MicrosoftYaHeiLight;
  color: rgba(255,255,255,0.6) !important;
  line-height: 36px !important;
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
  .mobile_hide{
    display: none;
  }
  .mobile_show{
    display: block;
  }
  .comunionin{
    padding: 130px 20px 70px;
    position: relative;
  }
  .mobile_blogo{
    display: block;
    position: absolute;
    width: 100%;
    top: 35px;
    left: -40%;
  }
  .blogo,.back_ball{
    display: none;
  }
  .mobile_blogo img{
    width: 100%;
  }
  .background{
    padding-top: 20px;
  }
  .bg{
    padding-top: 35px;
    padding-left: 0;
    padding-right: 0;
  }
  .bg .bg_box .bg_border{
    padding: 20px;
    min-height: unset;
  }
  .bg .bg_box{
    min-height: unset;
    padding-bottom: 10px;
  }
  .vision{
    padding-top: 40px;
  }
  .vision .vision_title p{
    padding-bottom: 40px;
  }
  .vision .vision_content{
    width: 100%;
  }
  .vision .vision_content .vright{
    padding-top: 24px;
    padding-left: 0;
  }
  .vision .vision_content .vright dt{
    font-size: 14px;
    line-height: 18px;
  }
  .vision .vision_content .vright dd{
    font-size: 12px;
    line-height: 20px;
  }
  .floor{
    padding-top: 40px;
  }
  .floor .fhead{
    width: 80%;
    margin: auto;
    padding-bottom: 40px;
  }
  .background .back_content p,.vision .vision_title p,.floor .fhead p{
    font-size: 20px;
    line-height: 23px;
  }
  .floor .ffloor table tr td:nth-child(1){
    width: auto;
    padding: 0px 10px; 
  }
  .floor .ffloor table tr th, .floor .ffloor table tr td{
    font-size: 10px;
    line-height: 18px;
  }
  .floor .ffloor{
    padding-bottom: 36px;
  }
  .floor .trynow{
    padding-bottom: 0;
  }
  .bg .bg_box .bg_border .bg_content dd{
    font-size: 12px;
    line-height: 20px;
    padding-bottom: 12px;
  }
  .bg .bg_box .bg_border .bg_content dt{
    display: none;
  }
  .bg_img img{
    max-width: 40px;
  }
  .bg_img{
    position: relative;
  }
  .bg_img span{
    display: block;
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
    position: absolute;
    top: 10px;
    left: 50px;
    color: white;
  }
  .floor .trynow p{
    font-size: 14px;
    line-height: 18px;
    padding: 11px 32px;
    height: auto;
    width: 143px;;
  }
  .com_desc p{
    font-size: 16px;
    line-height: 20px;
    text-align: left;
  }
  .com_con{
    font-size: 12px !important;
    line-height: 24px !important;
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
    line-height:20px;
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
}
</style>
