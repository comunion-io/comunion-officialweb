<template>
  <div class="member_box">
    <div class="logo">
      <div class="lleft">
      </div>
      <div class="ball">
        <img src="@/assets/img/indiviuals/ball.png" alt="" />
      </div>
      <div class="ball2">
        <img src="@/assets/img/indiviuals/ball2.png" alt="" />
      </div>
    </div>
    <div class="mobile_logo">
      <img src="@/assets/img/member/logo.png" alt="">
    </div>
    <div class="clean"></div>
    <div class="main">
      <div class="tbody">
        <el-row :gutter="40">
          <el-col :xs="8" :sm="8" :md="8">
            <div class="tb_box">
              <h3 ref="numberGrow1">0+</h3>
              <p>Developers</p>
            </div>
          </el-col>
          <el-col :xs="8" :sm="8" :md="8">
            <div class="tb_box">
              <h3 ref="numberGrow2">0+</h3>
              <p>Comunity Contributors</p>
            </div>
          </el-col>
          <el-col :xs="8" :sm="8" :md="8">
            <div class="tb_box">
              <h3 ref="numberGrow3">0+</h3>
              <p>Comunion NOW</p>
            </div>
          </el-col>
        </el-row>
      </div>
      <el-row class="list" :gutter="20">
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Kering.png" alt="" />
            </div>
            <div class="list_con" ref="list_box1">
            <div class="box_title">
              <p>Kering</p>
            </div>
            <dl class="box_con">
              <dt>Comunion Initiator</dt>
              <dd>The man nobody who knows.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Yadi.png" alt="" />
            </div>
            <div class="list_con" ref="list_box15">
              <div class="box_title">
                <p>Yadi</p>
              </div>
              <dl class="box_con">
                <dt>UVL Speaker</dt>
                <dd>Film Producer, Ultra Trail Runner, Circumnavigator of Clipper Round the World Yacht Race 2019-20.</dd>
              </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Song.png" alt="" />
            </div>
            <div class="list_con" ref="list_box3">
            <div class="box_title">
              <p>Song</p>
            </div>
            <dl class="box_con">
              <dt>Product Manager</dt>
              <dd>Talk to the world using product.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Mosi.png" alt="" />
            </div>
            <div class="list_con" ref="list_box4">
            <div class="box_title">
              <p>Mosi</p>
            </div>
            <dl class="box_con">
              <dt>Blockchain Developer</dt>
              <dd>Enjoy the war for freedom.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Ryan.png" alt="" />
            </div>
            <div class="list_con" ref="list_box5">
            <div class="box_title">
              <p>Ryan</p>
            </div>
            <dl class="box_con">
              <dt>Product Manager</dt>
              <dd>Never let yourself regret！</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Rainbow.png" alt="" />
            </div>
            <div class="list_con" ref="list_box6">
            <div class="box_title">
              <p>Rainbow</p>
            </div>
            <dl class="box_con">
              <dt>Product Manager</dt>
              <dd>From small beginning come great things.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Cosine.png" alt="" />
            </div>
            <div class="list_con" ref="list_box7">
            <div class="box_title">
              <p>Cosine</p>
            </div>
            <dl class="box_con">
              <dt>Blockchain Developer</dt>
              <dd>Developer, ecosystem designer of Communion, Previously worked as an blockchain developer at ASCH blockchain platform.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/VoidDaoist.png" alt="" />
            </div>
            <div class="list_con" ref="list_box8">
            <div class="box_title">
              <p>VoidDaoist</p>
            </div>
            <dl class="box_con">
              <dt>Operations Engineer</dt>
              <dd>Lang or never</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Effy.png" alt="" />
            </div>
            <div class="list_con" ref="list_box9">
            <div class="box_title">
              <p>Effy</p>
            </div>
            <dl class="box_con">
              <dt>Front End Engineer</dt>
              <dd>A programmer in the daytime and a dreamer at night.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Hi_Peach.png" alt="" />
            </div>
            <div class="list_con" ref="list_box10">
            <div class="box_title">
              <p>Hi_Peach</p>
            </div>
            <dl class="box_con">
              <dt>Front End Engineer</dt>
              <dd>Tough days don't last. Tough people do.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Jie.png" alt="" />
            </div>
            <div class="list_con" ref="list_box11">
            <div class="box_title">
              <p>Jie</p>
            </div>
            <dl class="box_con">
              <dt>Developer</dt>
              <dd>We get what we deserve, way down we go！</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Magicyang.png" alt="" />
            </div>
            <div class="list_con" ref="list_box12">
            <div class="box_title">
              <p>Magicyang</p>
            </div>
            <dl class="box_con">
              <dt>Developer</dt>
              <dd>Love as you believe, Faith in righteousness.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Melody.png" alt="" />
            </div>
            <div class="list_con" ref="list_box13">
            <div class="box_title">
              <p>Melody</p>
            </div>
            <dl class="box_con">
              <dt>Graphic Designer</dt>
              <dd>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven’t found it yet, keep looking. Don’t settle.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Mengggo.png" alt="" />
            </div>
            <div class="list_con" ref="list_box14">
            <div class="box_title">
              <p>Mengggo</p>
            </div>
            <dl class="box_con">
              <dt>Designer</dt>
              <dd>Founder of DesignDAO, Worked as a senior designer at NetEase and the chief designer of Nebulas.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/ZiShuo.png" alt="" />
            </div>
            <div class="list_con" ref="list_box2">
              <div class="box_title">
                <p>ZiShuo</p>
              </div>
              <dl class="box_con">
                <dt>Coordinator</dt>
                <dd>I used to be a musician, filmmaker, and entrepreneur. In the past, I have been trying to make myself better. But now, I am trying to make the world better.</dd>
              </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/EE.png" alt="" />
            </div>
            <div class="list_con" ref="list_box16">
            <div class="box_title">
              <p>EE</p>
            </div>
            <dl class="box_con">
              <dt>NOW Operation Coordinator</dt>
              <dd>Everything will be okay in the end. If it's not okay,it's not the end.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Mumu.png" alt="" />
            </div>
            <div class="list_con" ref="list_box17">
            <div class="box_title">
              <p>Mumu</p>
            </div>
            <dl class="box_con">
              <dt>Now Operation Lead</dt>
              <dd>Where there is a will, there is a way.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Yolo.png" alt="" />
            </div>
            <div class="list_con" ref="list_box18">
            <div class="box_title">
              <p>Yolo</p>
            </div>
            <dl class="box_con">
              <dt>Media&NOW Operators</dt>
              <dd>You only live once.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Bilige.png" alt="" />
            </div>
            <div class="list_con" ref="list_box19">
            <div class="box_title">
              <p>Bilige</p>
            </div>
            <dl class="box_con">
              <dt>Media&NOW Operators</dt>
              <dd>Self-control is the essence of a civilized life.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/QianChen.png" alt="" />
            </div>
            <div class="list_con" ref="list_box20">
            <div class="box_title">
              <p>QianChen</p>
            </div>
            <dl class="box_con">
              <dt>New Media Operators</dt>
              <dd>A person's dream can only be a dream, a group of people's dream is an era.</dd>
            </dl>
            </div>
          </div>
        </el-col>
        <el-col :xs="24" :sm="4" :md="4">
          <div class="list_box">
            <div class="box_img">
              <img src="@/assets/img/member_list/Elisa.png" alt="" />
            </div>
            <div class="list_con" ref="list_box21">
            <div class="box_title">
              <p>Elisa</p>
            </div>
            <dl class="box_con">
              <dt>IRM</dt>
              <dd>Righteous ones have no doubts; Wise ones have no uncertainties; Brave ones have no fears.</dd>
            </dl>
            </div>
          </div>
        </el-col>
      </el-row>
      <div class="list">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    time: {
      type: Number,
      default: 1
    }
  },
  data() {
    return {
      scroll: '',
      screenHeight : window.innerHeight,
    }
  },
  methods: {
    menu() {
      this.scroll = document.documentElement.scrollTop || document.body.scrollTop;
      this.screenHeight = window.innerHeight;

      if(this.$refs.list_box1){
        var list_box1 = this.$refs.list_box1.offsetTop;
        if((list_box1>=this.scroll)&&(list_box1<(this.screenHeight+this.scroll))){
          this.$refs.list_box1.classList.add('down_up');
        }
      }
      
      if(this.$refs.list_box2){
        var list_box2 = this.$refs.list_box2.offsetTop;
        if((list_box2>=this.scroll)&&(list_box2<(this.screenHeight+this.scroll))){
          this.$refs.list_box2.classList.add('down_up');
        }
      }

      if(this.$refs.list_box3){
        var list_box3 = this.$refs.list_box3.offsetTop;
        if((list_box3>=this.scroll)&&(list_box3<(this.screenHeight+this.scroll))){
          this.$refs.list_box3.classList.add('down_up');
        }
      }

      if(this.$refs.list_box4){
        var list_box4 = this.$refs.list_box4.offsetTop;
        if((list_box4>=this.scroll)&&(list_box4<(this.screenHeight+this.scroll))){
          this.$refs.list_box4.classList.add('down_up');
        }
      }

      if(this.$refs.list_box5){
        var list_box5 = this.$refs.list_box5.offsetTop;
        if((list_box5>=this.scroll)&&(list_box5<(this.screenHeight+this.scroll))){
          this.$refs.list_box5.classList.add('down_up');
        }
      }

      if(this.$refs.list_box6){
        var list_box6 = this.$refs.list_box6.offsetTop;
        if((list_box6>=this.scroll)&&(list_box6<(this.screenHeight+this.scroll))){
          this.$refs.list_box6.classList.add('down_up');
        }
      }
      
      if(this.$refs.list_box7){
        var list_box7 = this.$refs.list_box7.offsetTop;
        if((list_box7>=this.scroll)&&(list_box7<(this.screenHeight+this.scroll))){
          this.$refs.list_box7.classList.add('down_up');
        }
      }

      if(this.$refs.list_box8){
        var list_box8 = this.$refs.list_box8.offsetTop;
        if((list_box8>=this.scroll)&&(list_box8<(this.screenHeight+this.scroll))){
          this.$refs.list_box8.classList.add('down_up');
        }
      }

      if(this.$refs.list_box9){
        var list_box9 = this.$refs.list_box9.offsetTop;
        if((list_box9>=this.scroll)&&(list_box9<(this.screenHeight+this.scroll))){
          this.$refs.list_box9.classList.add('down_up');
        }
      }

      if(this.$refs.list_box10){
        var list_box10 = this.$refs.list_box10.offsetTop;
        if((list_box10>=this.scroll)&&(list_box10<(this.screenHeight+this.scroll))){
          this.$refs.list_box10.classList.add('down_up');
        }
      }

      if(this.$refs.list_box11){
        var list_box11 = this.$refs.list_box11.offsetTop;
        if((list_box11>=this.scroll)&&(list_box11<(this.screenHeight+this.scroll))){
          this.$refs.list_box11.classList.add('down_up');
        }
      }

      if(this.$refs.list_box12){
        var list_box12 = this.$refs.list_box12.offsetTop;
        if((list_box12>=this.scroll)&&(list_box12<(this.screenHeight+this.scroll))){
          this.$refs.list_box12.classList.add('down_up');
        }
      }

      if(this.$refs.list_box13){
        var list_box13 = this.$refs.list_box13.offsetTop;
        if((list_box13>=this.scroll)&&(list_box13<(this.screenHeight+this.scroll))){
          this.$refs.list_box13.classList.add('down_up');
        }
      }

      if(this.$refs.list_box14){
        var list_box14 = this.$refs.list_box14.offsetTop;
        if((list_box14>=this.scroll)&&(list_box14<(this.screenHeight+this.scroll))){
          this.$refs.list_box14.classList.add('down_up');
        }
      }

      if(this.$refs.list_box15){
        var list_box15 = this.$refs.list_box15.offsetTop;
        if((list_box15>=this.scroll)&&(list_box15<(this.screenHeight+this.scroll))){
          this.$refs.list_box15.classList.add('down_up');
        }
      }

      if(this.$refs.list_box16){
        var list_box16 = this.$refs.list_box16.offsetTop;
        if((list_box16>=this.scroll)&&(list_box16<(this.screenHeight+this.scroll))){
          this.$refs.list_box16.classList.add('down_up');
        }
      }

      if(this.$refs.list_box17){
        var list_box17 = this.$refs.list_box17.offsetTop;
        if((list_box17>=this.scroll)&&(list_box17<(this.screenHeight+this.scroll))){
          this.$refs.list_box17.classList.add('down_up');
        }
      }

      if(this.$refs.list_box18){
        var list_box18 = this.$refs.list_box18.offsetTop;
        if((list_box18>=this.scroll)&&(list_box18<(this.screenHeight+this.scroll))){
          this.$refs.list_box18.classList.add('down_up');
        }
      }

      if(this.$refs.list_box19){
        var list_box19 = this.$refs.list_box19.offsetTop;
        if((list_box19>=this.scroll)&&(list_box19<(this.screenHeight+this.scroll))){
          this.$refs.list_box19.classList.add('down_up');
        }
      }

      if(this.$refs.list_box20){
        var list_box20 = this.$refs.list_box20.offsetTop;
        if((list_box20>=this.scroll)&&(list_box20<(this.screenHeight+this.scroll))){
          this.$refs.list_box20.classList.add('down_up');
        }
      }

      if(this.$refs.list_box21){
        var list_box21 = this.$refs.list_box21.offsetTop;
        if((list_box21>=this.scroll)&&(list_box21<(this.screenHeight+this.scroll))){
          this.$refs.list_box21.classList.add('down_up');
        }
      }

      if(this.$refs.list_box22){
        var list_box22 = this.$refs.list_box22.offsetTop;
        if((list_box22>=this.scroll)&&(list_box22<(this.screenHeight+this.scroll))){
          this.$refs.list_box22.classList.add('down_up');
        }
      }
    },
    numberGrow (val,ele) {
      let _this = this
      let step = (val * 20) / (_this.time * 2000);
      let current = 0
      let start = 0
      let t = setInterval(function () {
        start += step
        if (start > val) {
          clearInterval(t)
          start = val
          t = null
        }
        if (current === start) {
          return
        }
        current = start

        ele.innerHTML = current.toString().replace(/(\d)(?=(?:\d{3}[+]?)+$)/g, '$1,')+'+';
      }, 30)
    }
  },
  mounted() {
    window.addEventListener('scroll', this.menu),
    this.numberGrow("100",this.$refs.numberGrow1);
    this.numberGrow("200",this.$refs.numberGrow2);
    this.numberGrow("500",this.$refs.numberGrow3);
  }
};
</script>

<style>
</style>
<style scoped>
.mobile_logo{
  display: none;
}
.clean{
  clear: both;
}
.member_box {
  width: 100%;
  background-color: hsla(231, 100%, 12%, 1);
  padding-top: 70px;
}

.ball {
  width: 133px;
  height: 133px;
  position: absolute;
  top: 120px;
}
.ball img {
  width: 100%;
  height: 100%;
}
.logo .lleft{
  height: 173px;
  display: inline-block;
  margin-right: 180px;
  width: 57%;
  background: url(../../assets/img/member/logo.png);
  background-repeat:no-repeat;
  background-position:100%;
}
.logo .ball{
  display: inline-block;
}
.logo .ball2{
  position: absolute;
  left: 35%;
}



.main {
  max-width: 1000px;
  margin: 0 auto;
  padding-top: 133px;
  text-align: center;
}
.main .tb_box h3{
  font-size:44px;
  font-family:Arial-BoldMT,Arial;
  font-weight:normal;
  color:rgba(121,134,242,1);
  line-height:54px;
  text-align: left;
}
.main .tb_box p{
  font-size:24px;
  font-family:ArialMT;
  color:rgba(255,255,255,0.6);
  line-height:30px;
  text-align: left;
}
.main .list{
  padding-top: 120px;
}
.main .list .list_box{
  background:rgba(0,12,85,1);
  box-shadow:5px 10px 30px 0px rgba(1,7,40,0.8);
  padding-top: 20px;
  min-height: 530px;
  margin-bottom: 10px;
}
.main .list .list_box .box_img{
  background:rgba(0,15,109,0.3);
  width: 130px;
  height: 130px;
}
.main .list .list_box .box_title{
  padding-top: 10px;
}
.main .list .list_box .box_title p{
  font-size:22px;
  font-family:Arial-BoldMT,Arial;
  font-weight:normal;
  color:rgba(255,255,255,1);
  line-height:28px;
  text-align: left;
  padding-left: 10px;
}
.main .list .list_box .box_con{
  padding: 4px 10px 0 10px;
  text-align: left;
}
.main .list .list_box .box_con dt{
  font-size:14px;
  font-family:ArialMT;
  color:rgba(121,134,242,1);
  line-height:18px;
  min-height: 35px;
}
.main .list .list_box .box_con dd{
  padding-top: 10px;
  font-size:14px;
  font-family:PingFangSC-Regular,PingFang SC;
  font-weight:400;
  color:rgba(255,255,255,0.4);
  line-height:18px;
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

@media screen and (max-width: 767px){
  .member_box{
    position: relative;
  }
  .logo{
    display: none;
  }
  .mobile_logo{
    display: block;
    position: absolute;
    width: 100%;
    top: 35px;
    left: -40%;
  }
  .mobile_logo img{
    width: 100%;
  }
  .main{
    padding-top: 0;
  }
  .member_box{
    padding: 130px 20px;
  }
  .main .tb_box h3{
    font-size: 28px;
    line-height: 42px;
  }
  .main .tb_box p{
    font-size: 12px;
    line-height: 18px;
  }
  .main .list{
    padding-top: 25px;
  }
  .main .list .list_box{
    padding-top: 10px;
    padding-bottom: 10px;
    margin-bottom: 10px;
    overflow: hidden;
    height: auto;
    min-height: auto;
  }
  .main .list .list_box .box_img{
    width: 90px;
    height: 90px;
    float: left;
  }
  .main .list .list_box .list_con{
    padding-left: 110px;
    /* float: left; */
  }
  .main .list .list_box .box_con dd{
    padding-top: 12px;
    font-size: 12px;
    line-height: 16px;
  }
  .main .list .list_box .box_title{
    padding-top: 0px;
  }
  .main .list .list_box .box_title p{
    font-size: 16px;
    line-height: 20px;
  }
  .main .list .list_box .box_con dt{
    font-size: 12px;
    line-height: 16px;
    min-height: auto;
  }
  .box_img img{
    width: 100%;
    height: 100%;
  }
}

</style>
