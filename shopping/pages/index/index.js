//index.js
//获取应用实例
var app = getApp()
Page({
  data: {
    //轮播图
    // imgUrls: [{
    //   link : '/pages/index/index',
    //   url : '../../images/banner1.jpg'
    // },{
    //   link : "/pages/index/index",
    //   url : "../../images/banner2.jpg"
    // },{
    //   link : "/pages/index/index",
    //   url : "../../images/banner3.jpg"
    // }],
    //分类
     navs: [{icon: "../../images/nav01.png",       name: "大聚惠"},
           {icon: "../../images/nav02.png", name: "海外购"},
           {icon: "../../images/nav03.png",  name: "超市百货"},
           {icon: "../../images/nav04.png",     name: "厂家直销"},
           {icon: "../../images/nav05.png",     name: "美食娱乐"
           }],
//商城客户
// customer: [
//   {icon: "../../images/scyh0.png",       name: "海绵宝宝"},
//   {icon: "../../images/scyh3.png",       name: "韩国代购"},
//   {icon: "../../images/scyh4.png",       name: "ARC潮店"},
//   {icon: "../../images/scyh1.png",       name: "欧力女装"}
// ],

//精选促销
// promotion: [
//   {icon: "../../images/d_sp_01.png",      name: "收款海绵包包 ￥68.00"},
//   {icon: "../../images/d_sp_02.png",       name: "百搭学院风英伦背包单双肩包 ￥65.00"},
//   {icon: "../../images/d_sp_04.png",       name: "百搭学院风英伦背包单双肩包 ￥96.00"},
//   {icon: "../../images/d_sp_03.png",       name: "百搭学院风英伦背包单双肩包 ￥108.00"},
//   {icon: "../../images/d_sp_06.png",       name: "百搭学院风英伦背包单双肩包 ￥299.00"},
//   {icon: "../../images/d_sp_05.png",       name: "百搭学院风英伦背包单双肩包 ￥39.00"},
//   {icon: "../../images/d_sp_01.png",       name: "收款海绵包包 ￥68.00"},
//   {icon: "../../images/d_sp_04.png",       name: "百搭学院风英伦背包单双肩包 ￥96.00"},
//    {icon: "../../images/d_sp_05.png",       name: "百搭学院风英伦背包单双肩包 ￥39.00"}
// ],
           
    indicatorDots: true,
    autoplay: true,
    interval: 2000,
    duration: 1000,

  },



  //事件处理函数
  bindViewTap: function() {
    wx.navigateTo({
      url: '../logs/logs'
    })
  },
  onLoad: function () {
    console.log('onLoad')
    var that = this
    //调用应用实例的方法获取全局数据
    app.getUserInfo(function(userInfo){
      //更新数据
      that.setData({
        userInfo:userInfo
      })
    })

//轮播图
        wx.request({
            url: 'http://localhost/November/laravel/public/',
            method: 'GET',
            data: {},
            header: {
                'Accept': 'application/json'
            },
            success: function(res) {
                that.setData({
                    images: res.data
                })
            }
        })

        //商城客户
  wx.request({
            url: 'http://localhost/November/laravel/public/admin/kuhu',
            method: 'GET',
            data: {},
            header: {
                'Accept': 'application/json'
            },
            success: function(res) {
                that.setData({
                    customer: res.data
                })
            }
        })
         //精选促销
  wx.request({
            url: 'http://localhost/November/laravel/public/admin/cuxiao',
            method: 'GET',
            data: {},
            header: {
                'Accept': 'application/json'
            },
            success: function(res) {
                that.setData({
                    promotion: res.data
                })
            }
        })




  }

  
})
