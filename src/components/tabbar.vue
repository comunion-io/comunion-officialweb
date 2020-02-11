<template>
  <div class="fbox">
    <div class="main">
      <div class="fleft">
        <img src="@/assets/img/home/flogo.png" alt="" />
        <p>©2019 comunion.io. All Rights Reserved</p>
      </div>
      <div class="fright">
        <div>
          <dl>
            <dt>About us</dt>
            <dd><router-link to="/members">Team Members</router-link></dd>
            <dd>
              <a href="https://comunion.io/Comunion%20WhitePaper%202.0%20EN.pdf" target="_blank">
                White Paper
              </a>
            </dd>
            <dd><a href="https://wiki.comunion.io/" target="_blank">Wiki</a></dd>
          </dl>
        </div>
        <div>
          <dl>
            <dt>Contact us</dt>
            <dd>Telegram：Comunion</dd>
            <dd>Email：contact@comunion.io</dd>
            <dd><a href="https://bbs.comunion.io" target="_blank">BBS：https://bbs.comunion.io</a></dd>
          </dl>
        </div>
        <div>
          <dl class="floor_right">
            <dt>Follow us</dt>
            <a href="https://github.com/comunion-io" target="_blank">
              <img src="@/assets/img/home/follow-1-b.png" alt=""/>
            </a>
            <a href="https://twitter.com/comunion8" target="_blank">
              <img src="@/assets/img/home/follow-2-b.png" alt=""/>
            </a>
            <a href="https://medium.com/@bigdaoio" target="_blank">
              <img src="@/assets/img/home/follow-3-b.png" alt=""/>
            </a>
          </dl>
        </div>
      </div>
      <div class="mobile_fright">
        <div class="fr_box">
          <div class="fr_title">
            <p>About us</p>
          </div>
          <div class="fr_con">
            <p><router-link to="/members">Team Members</router-link></p>
            <p>
              <a href="https://comunion.io/Comunion%20WhitePaper%202.0%20EN.pdf" target="_blank">White Paper</a>
            </p>
            <p><a href="https://wiki.comunion.io/" target="_blank">Wiki</a></p>
          </div>
        </div>
        <div class="fr_box">
          <div class="fr_title">
            <p>Contact us</p>
          </div>
          <div class="fr_con">
            <p>Telegram：Comunion</p>
            <p>Email：contact@comunion.io</p>
            <p><a href="https://bbs.comunion.io" target="_blank">BBS：https://bbs.comunion.io</a></p>
            <p>Wechat：Comunion</p>
          </div>
        </div>
        <div class="fr_box">
          <div class="fr_title">
            <p>Follow us</p>
          </div>
          <div class="fr_con">
            <p>
              <a href="https://github.com/comunion-io" target="_blank">
                <img src="@/assets/img/home/follow-1.png" alt=""/>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://twitter.com/comunion8" target="_blank">
                <img src="@/assets/img/home/follow-2.png" alt=""/>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://medium.com/@bigdaoio" target="_blank">
                <img src="@/assets/img/home/follow-3.png" alt=""/>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style></style>
<style scoped>
.mobile_fright{
  display: none;
}
.fbox {
  width: 100%;
  background-color: hsla(231, 100%, 8%, 1);
  padding-bottom: 20px;
}
.main {
  max-width: 1200px;
  display: flex;

  padding-top: 63px;
  margin: 0 auto;
  padding-bottom: 50px;
  /* border-bottom: 1px solid #ccc; */
}
.fleft {
  width: 162px;
  height: 25px;
  margin-left: 98px;
  margin-right: 120px;
}
.fleft p{
  font-size:12px;
  font-family:PingFangSC-Regular,PingFang SC;
  font-weight:400;
  color:rgba(204,204,204,0.35);
  line-height:24px;
  min-width: 250px;
  padding-top: 10px;
}
.fleft img {
  width: 100%;
  height: 100%;
}
dt {
  font-size: 18px;
  font-family: PingFangSC-Regular, PingFang SC;
  font-weight: 400;
  color: rgba(216, 216, 216, 1);
  line-height: 25px;
}
dd,
a {
  font-size: 12px;
  font-family: PingFangSC-Regular, PingFang SC;
  font-weight: 400;
  color: rgba(204, 204, 204, 1);
  line-height: 24px;
}
.fright {
  display: flex;
}
.fright div:first-child {
  margin-right: 120px;
}
.fright div:last-child {
  margin-left: 120px;
}
.fright div:last-child a {
  display: inline-block;
  margin-right: 20px;
  max-width: 30px;
}
.fright div:last-child a img {
  width: 100%;
  height: 100%;
}
.fright div dl dd a:hover{
  color: #ffcc33;
}
.floor_right dt{
  padding-bottom: 10px;
}

@media screen and (max-width: 767px){
  .fbox {
    padding: 28px 20px 30px;
    height: auto;
    /* display: none; */
  }
  .fright{
    display: none;
  }
  .mobile_fright{
    display: block;
    padding-top: 25px;
  }
  .fleft{
    width: 100%;
    margin-left: 0;
    margin-right: 0;
  }
  .fleft img{
    height: auto;
  }
  .main{
    display: unset;
    border: none;
  }
  .fr_box{
    overflow: hidden;
    padding: 15px 0;
  }
  .fr_title,.fr_con{
    float: left;
  }
  .fr_title{
    min-width: 75px;
  }
  .fr_title p{
    font-size:14px;
    font-family:PingFangSC-Semibold,PingFang SC;
    font-weight:600;
    color:rgba(216,216,216,1);
    line-height:16px;
  }
  .fr_con{
    padding-left: 55px;
  }
  .fr_con a,.fr_con p{
    font-size:10px;
    font-family:PingFangSC-Regular,PingFang SC;
    font-weight:400;
    color:rgba(204,204,204,0.8);
    line-height:12px;
    padding-bottom: 10px;
  }
  .fleft img{
    float: left;
    width: 30%;
  }
  .fleft p{
    float: right;
    padding-top: 0;
  }
}
</style>
