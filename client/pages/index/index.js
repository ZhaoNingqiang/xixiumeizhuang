// pages/index/index.js
//var home_api = 'https://r0lrh1e2.qcloud.la/weapp/api/home';
var home_api = 'https://334997638.xxmz.xyz/weapp/api/home';

Page({

  /**
   * 页面的初始数据
   */
  data: {
    home: {}

  },


  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this;
    wx.request({
      url: home_api,
      data: {},
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        var data = res.data;
        if (data.code > -1) {
          that.setData({
            home: data.data
          });
        } else {

        }

      }
    })
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})