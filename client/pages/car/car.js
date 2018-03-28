// pages/car/car.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    carts: {
      cart: [
        {
          goodsId:2,
          title: '我是吓死你 的那点事的的速度v的是的v是是虫弄着呢你自己你在内的',
          poster: 'https://xixiu-1256206862.cos.ap-beijing.myqcloud.com/banner/zmdn.jpg',
          curPrice: 12,
          isSelect: false,
          count: 1,

        },
        {
          goodsId: 2,
          title: 'title',
          poster: 'https://xixiu-1256206862.cos.ap-beijing.myqcloud.com/banner/zmdn.jpg',
          curPrice: 12,
          isSelect: false,
          count: 1,

        },
        {
          goodsId: 2,
          title: 'title',
          poster: 'https://xixiu-1256206862.cos.ap-beijing.myqcloud.com/banner/zmdn.jpg',
          curPrice: 12,
          isSelect: false,
          count: 1,

        },
        {
          goodsId: 2,
          title: 'title',
          poster: 'https://xixiu-1256206862.cos.ap-beijing.myqcloud.com/banner/zmdn.jpg',
          curPrice: 12,
          isSelect: false,
          count: 1,

        },
        {
          goodsId: 2,
          title: 'title',
          poster: 'https://xixiu-1256206862.cos.ap-beijing.myqcloud.com/banner/zmdn.jpg',
          curPrice: 12,
          isSelect: false,
          count: 1,

        },
        {
          goodsId:3,
          title: 'title2',
          poster: 'https://xixiu-1256206862.cos.ap-beijing.myqcloud.com/banner/zmdn.jpg',
          curPrice: 12,
          isSelect: true,
          count: 1,

        }
      ],
      postage:6,
      totalMoney: 100
    },
    isAllSelect: false,
    editMode:'编辑'
  },

  editToggle:function(e){
    let name = e.target.dataset.name;
    if(name == '编辑'){
      this.setData({
        editMode: '完成'
      });
    }else{
        this.setData({
          editMode: '编辑'
        });
    }
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {

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