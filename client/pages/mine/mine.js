var app = getApp()
Page({
  data: {
    userInfo: {},
    motto: 'Hello World',
    // orderItems
    orderItems: [
      {
        typeId: 0,
        name: '待付款',
        url: 'bill',
        imageurl: '../../images/about.jpeg',
      },
      {
        typeId: 1,
        name: '待发货',
        url: 'bill',
        imageurl: '../../images/about.jpeg',
      },
      {
        typeId: 2,
        name: '待收货',
        url: 'bill',
        imageurl: '../../images/about.jpeg'
      },
      {
        typeId: 3,
        name: '待评价',
        url: 'bill',
        imageurl: '../../images/about.jpeg'
      }
    ],
  },
  //事件处理函数
  toOrder: function () {
    wx.navigateTo({
      url: '../order/order'
    })
  },
  onLoad: function () {
    console.log('onLoad')
    var that = this
    //调用应用实例的方法获取全局数据
    app.getUserInfo(function (userInfo) {
      //更新数据
      that.setData({
        userInfo: userInfo
      })
    })
  }
})