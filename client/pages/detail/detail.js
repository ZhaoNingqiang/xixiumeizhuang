// pages/goods/detail/detail.js
var detailApi = 'https://334997638.xxmz.xyz/weapp/api/goods_detail/'
//var detailApi = 'https://r0lrh1e2.qcloud.la/weapp/api/goods_detail/';
Page({

  /**
   * 页面的初始数据
   */
  data: {
    action: 'addCar',
    showDialog: false,
    goodsDeatil: {}

  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    console.log('onLoad options = ' + options);
    var that = this;
    wx.request({
      url: detailApi + options.id,
      data: {},
      header: { 'Content-Type': 'application/json' },
      method: 'GET',
      success: function (res) {
        that.setData({
          goodsDeatil: res.data.data
        })
      },
    })
  },

  previewImage: function (e) {
    console.log("e -- " + e)
    var current = e.target.dataset.src;

    wx.previewImage({
      current: current,
      urls: this.data.goodsDeatil.banner,
    })
  },

  goHome: function () {
    wx.switchTab({
      url: '/pages/index/index',
    })
  },

  goCar: function () {
    wx.switchTab({
      url: '/pages/car/car',
    })
  },

  addCar: function () {
    this.setData({
      showDialog: true,
      action: '加入购物车'
    });
  },


  buyNow: function (res) {


    this.setData({
      showDialog: true,
      action: '立即购买'
    });
  },

  closeDialog: function () {
    this.setData({
      showDialog: false
    });
  },






  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
    console.log('onReady');
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
    console.log('onShow');
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
    console.log('onHide');
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
    console.log('onUnload');
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
    console.log('onPullDownRefresh');
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
    console.log('onReachBottom');
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
    console.log('onShareAppMessage');
  }
})