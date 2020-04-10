<template>
  <div class="box">
    <div class="main">
      <div class="left-log"></div>
      <div class="right-nav">
        <div>
          <ul class="first-ul">
            <li @click="activeMethods('Home')" @mouseenter="move_in('Home')" @mouseleave="move_out('Home')" >
              <router-link to="/home">
                <a href="#">Comunion</a>
              </router-link>
              <span :class="{ active: activeIndex == 'Home',move_active: move_active == 'Home' }"></span>
            </li>
            <li @click="activeMethods('Comunionintroduction')"  @mouseenter="move_in('Comunionintroduction')" @mouseleave="move_out('Comunionintroduction')">
              <p>
                <router-link to="/comunionintroduction">Individuals</router-link><span class="icon"><img src="@/assets/img/home/icon-select.png" alt=""></span></p>
              <span :class="{ active: activeIndex == 'Comunionintroduction',move_active: move_active == 'Comunionintroduction'  }"></span>
              
               <div class="slectdog" :class="{ showDlog: hideDisplay == 1 }" @mouseleave="hideDisplay = 0">
                <div class="slectdog_san"></div>
                <ol>
                  <li>
                    <router-link to="/comunionintroduction">
                      What is Comunion
                    </router-link>
                  </li>
                  <li>
                    <a href="http://dao.comunion.io/#/home" target="_blank">Use Comunion</a>
                  </li>
                  <li><a href="https://wiki.comunion.io/" target="_blank">Guide </a></li>
                </ol>
                <div>
                  <p></p>
                </div>
              </div> 
            </li>
            <li @click="activeMethods(2)" @mouseenter="move_in('bbs')" @mouseleave="move_out('bbs')" >
              <a href="https://bbs.comunion.io" target="_blank">BBS</a>
              <span :class="{ active: activeIndex == 2,move_active: move_active == 'bbs' }"></span>
              <i></i>
            </li>
            <li @click="activeMethods('Now')"  @mouseenter="move_in('Now')" @mouseleave="move_out('Now')">
              <router-link to="/now">NOW</router-link>
              <span :class="{ active: activeIndex == 'Now',move_active: move_active == 'Now'  }"></span>
            </li>
          </ul>
        </div>
        <div class="last_right_nav">
          <div><img src="@/assets/img/home/hangye-note.png" alt="" /></div>
          <a href="https://comunion.io/whitepaper.pdf" target="_blank">
            White paper
          </a>
        </div>
      </div>
    </div>
    <div class="mobile_main">
      <div class="heard_m">
        <div class="sp_header" :class="{'is_sp_header':is_sp_header}">
            <div class="sp_logo">
                    <img src="@/assets/img/home/logo1.png" alt="">
            </div>
            <div class="sp_nav" :class="{'sp_nav_se':is_sp_nav_se}" @click="show_mobile()" ref="sp_nav"> <span></span>  <span></span>  <span></span> 
            </div>
        </div>
        <div class="sjj_nav" :class="{'nav_show':is_nav_show}"  ref="sjj_nav">
            <ul>
                <router-link to="/home">
                <li @click="show_mobile()">	
                    <a href="#">Comunion</a>
                </li>
                </router-link>
                <li class="mobile_er_sj" @click="show_mobile_er($event)">	
                    <a href="#">Individuals</a>
                  <i class="sp_nav_xjb" :class="{'sjj_nav_i_se':is_sjj_nav_i_se}" ><svg t="1496193951932" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="995" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200"> <path d="M768.468 428.876l-84.723-84.723-170.711 170.711-170.711-170.711-84.723 84.723 170.711 170.711-0.092 0.091 84.723 84.724 0.092-0.092 0.092 0.092 84.723-84.724-0.092-0.091z" p-id="996"></path></svg></i>
                  <ul :class="{'is_er_title':is_er_title}">
                    <li @click="show_mobile()">
                      <router-link to="/comunionintroduction">
                       What is Comunion
                      </router-link>
                    </li>
                    <li @click="show_mobile()">
                      <a href="http://dao.comunion.io/#/home" target="_blank">Use Comunion</a>
                    </li>
                    <li @click="show_mobile()">
                      <a href="https://wiki.comunion.io/" target="_blank">Guide </a>
                    </li>
                  </ul>
                </li>
                <a href="https://bbs.comunion.io" target="_blank">
                <li @click="show_mobile()">
                  bbs
                </li>
                </a>
                <router-link to="/now">
                <li @click="show_mobile()">
                    <a href="#">NOW</a>
                </li>
                </router-link>
            </ul>
        </div>
    </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      activeIndex: this.$route.name,
      hideDisplay: 0,
      move_active: false,
      is_sp_nav_se:false,
      is_nav_show:false,
      is_sp_header:false,
      is_sjj_nav_i_se:false,
      is_er_title:false,
    };
  },
  methods: {
    activeMethods(index) {
      this.activeIndex = index;
      this.hideDisplay = 0;
      if (index == 1) {
        this.hideDisplay = 1;
      }
    },
    move_in(index){
      this.move_active = index;
      if(index=='Comunionintroduction'){
        this.hideDisplay = 1;
      }
    },
    move_out(index){
      this.move_active = false;
      if(index=='Comunionintroduction'){
        // this.hideDisplay = 0;
      }
    },
    show_mobile(){
      this.is_sp_nav_se = !this.is_sp_nav_se;
      this.is_nav_show = !this.is_nav_show;
      this.is_sp_header = !this.is_sp_header;
    },
    show_mobile_er(){
      this.is_sjj_nav_i_se = !this.is_sjj_nav_i_se;
      this.is_er_title = !this.is_er_title;
    }

  }
};
</script>
<style scoped>
.mobile_main{
  display: none;
}
.box {
  width: 100%;
  height: 60px;
  background-color: #fff;
}
.main {
  width: 1200px;
  margin: 0 auto;
  display: flex;
}
.left-log {
  background: url(../assets/img/home/logo1.png) no-repeat center;
  width: 166px;
  /* height: 50px; */
  background-size: 70%;
  margin-right: 440px;
  margin-top: 10px;
}

.right-nav {
  /* height: 50px; */
  display: flex;
  /* margin-top: 40px; */
  padding-top: 15px;
}
.right-nav div:first-child ul {
  display: flex;
  font-size: 14px;
  font-family: ArialMT;
  color: rgba(52, 69, 99, 1);
  line-height: 20px;
}
.right-nav div:first-child ul li:nth-child(2) {
  position: relative;
}
.right-nav div:first-child ul li + li {
  margin-left: 50px;
}
.last_right_nav {
  display: flex;
  width: 122px;
  height: 24px;
  border-radius: 12px;
  border: 1px solid rgba(179, 186, 197, 1);
  margin-left: 64px;
  align-items: center;
  padding-left: 16px;
}
.last_right_nav div {
  margin-right: 6px;
}
.last_right_nav a {
  font-size: 12px;
  font-family: PingFangSC-Regular, PingFang SC;
  font-weight: 400;
  color: rgba(52, 69, 99, 1);
  line-height: 16px;
}
.first-ul > li {
  position: relative;
  text-align: center;
  font-size: 14px;
  font-family: ArialMT;
  color: rgba(52, 69, 99, 1);
}
.move_active,.active {
  display: block;
  width: 20px;
  height: 3px;
  background-color: #ffcc33;
  margin: 0 auto;
  margin-top: 7px;
  animation: 0.3s opacity2;
  -webkit-animation: 0.3s opacity2;
}

@keyframes opacity2{
    0%{width:0}
    100%{width:20px;}
}


.icon {
  padding-left: 4px;
  position: relative;
}
.icon img{
  position: absolute;
  top: 10px;
}


.slectdog{
  position: absolute;
  top: 45px;
  left: -12px;
  width: 165px;
  background:rgba(255,255,255,0.98);
  border:1px solid rgba(194,195,204,1);
  padding: 10px 0;
  border-radius: 4px;
  animation: 0.5s opacity1;
  -webkit-animation: 0.5s opacity1;
  display: none;
  z-index: 100;
}
.showDlog{
  display: block;
}
.slectdog ol li{
  margin-left: 0px !important;
  padding: 6px 20px; 
  text-align: left;
  font-size:14px;
  font-family:ArialMT;
  color:rgba(52,69,99,1);
  line-height:20px;
  
}
.slectdog ol li:hover{
  background:rgba(226,227,241,1);
  font-weight: normal;
}
.slectdog_san{
  position: absolute;
  top: -5px;
  left: 30px;
  width: 0;
  height: 0;
  border-width: 0 5px 5px;
  border-style: solid;
  border-color: transparent transparent rgba(194,195,204,1);
}
.slectdog_san:after{
  content: "";
    position: absolute;
    top: 2px;
    left: -5px;
    border-width: 0 5px 5px;
    border-style: solid;
    border-color: transparent transparent #fff;
}

@keyframes opacity1{
    0%{top:30px}
    100%{top:45px;}
}

.last_right_nav:hover{
  border: #ffcc33 1px solid;
}
.last_right_nav a:hover{
  color: #ffcc33;
}


@media screen and (max-width: 767px){
  .main {
    display: none;
  }
  .mobile_main{
    display: block;
  }
  .box{
    height: 70px;
  }

  /*手机端导航*/

  .sp_header {
    height: 70px;
    overflow: hidden;
    background: #00093d;
    position: fixed;
    z-index: 10;
    width: 100%;
  }
  .is_sp_header{
    background: white;
  }
  .is_sp_header .sp_nav_se span{
    background: #00093e;
  }

  .sp_logo {
      position: absolute;
      margin: auto;
      width: 200px;
      margin: auto;
      position: absolute;
      top: 10px;
      left: 0;
      bottom: 0;
      right: 0;
      text-align: center;
  }
  .sp_logo img{
    max-width: 135px;
  }

  .sp_logo img {
      margin: auto;
      max-height: 50px;
  }

  .sp_nav {
      width: 50px;
      float: right;
      position: relative;
      cursor: pointer;
      height: 30px;
      margin-top: 18px;
  }

  .sp_nav span {
      display: block;
      background: white;
      width: 26px;
      height: 2px;
      position: absolute;
      left: 10px;
      transition: all ease 0.35s;
  }

  .sp_nav span:nth-of-type(1) {
      top: 0px;
  }

  .sp_nav span:nth-of-type(2) {
      top: 10px;
  }

  .sp_nav span:nth-of-type(3) {
      top: 20px;
  }

  .sp_nav_se span:nth-of-type(1) {
      top: 10px;
      transform: rotate(45deg);
  }

  .sp_nav_se span:nth-of-type(2) {
      width: 0;
  }

  .sp_nav_se span:nth-of-type(3) {
      top: 10px;
      transform: rotate(-45deg);
  }

  .sjj_nav {
      position: fixed;
      z-index: 9;
      background: white;
      width: 100%;
      /* height: calc(100% - 0px); */
      font-size: 14px;
      line-height: 40px;
      top: -100%;
      left: 0;
      overflow: auto;
      overflow-x: hidden;
      transition: top ease 0.35s;
  }

  .nav_show {
      top: 70px;
  }

  .sjj_nav>ul>li:first-child {
      overflow: hidden;
  }

  .sjj_nav>ul>li:first-child>a {
      float: left;
      width: calc(100% - 70px);
  }

  .sjj_nav>ul>li:first-child .language {
      float: right;
      width: 70px;
      overflow: hidden;
      line-height: 30px;
      margin-top: 5px;
  }

  .sjj_nav>ul>li:first-child .language a {
      width: 35px;
      float: left;
      border-left: 1px #ddd solid;
      text-align: center;
      color: #999;
  }

  .sjj_nav ul li i {
      position: absolute;
      top: 5px;
      right: 0px;
  /*border-left:1px #ddd solid;*/
      height: 30px;
      padding: 0px 7px 0 7px;
  }

  .sjj_nav ul li i svg {
      transform: rotate(-90deg);
      transition: all ease 0.35s;
  }

  .sjj_nav ul li .sjj_nav_i_se svg {
      transform: rotate(0deg);
  }

  .sjj_nav ul li {
      border-top: 1px #e4e4e4f5 solid;
      margin-left: 20px;
      margin-right: 20px;
      position: relative;
      line-height: 55px;
      font-size: 16px;
      text-align: left;
  }

  .sjj_nav>ul >li:last-child {
      border-bottom: 1px #dddddd4d solid;
  }

  .sjj_nav ul li ul {
      display: none;
  }

  .sjj_nav ul li a {
      color: #272424;
      width: 80%;
  }

  .sjj_nav ul li ul li a {
      color: #999;
      display: block;
      text-align: left;
  }

  .sjj_nav ul li i svg {
      width: 20px;
      height: 20px;
      fill: #555;
  }

  .sjj_nav ul li .sjj_nav_i_se svg {
      fill: #c9141e;
  }

  .sjj_nav ul li ul li>ul {
      margin-left: 10px;
  }
  .is_er_title{
    display: block !important;
  }
  .mobile_er_sj{
    cursor: pointer;
  }
}
</style>
