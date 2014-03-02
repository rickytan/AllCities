AllCities
=========

**中国所有城市与地区json数据**

## 说明

本人`Google`了一下，发现如此常用的数据网上居然没有分享的！？？于是想到[京东](http://www.jd.com)的收货地址比较详细，
应该可以抓取。于是就有了此 Repo

## 使用说明

[cities.json](https://github.com/rickytan/AllCities/blob/master/cities.json) 是整理好的，去掉一些无意义的数据之后的
数据文件，它是一个数组，其中：

- name 是城市（地区）名称
- id 是它在文件中的唯一标识
- pid 是它的上级行政机构的名称

如：

    {     
        name: "通化市",
        id: 657,
        pid: 9
    },

上级为_9_，而 `id` 为 _9_ 的是 **吉林**，所以它是`吉林省-->通化市`

为了方便查询与使用，请自行将它处理为 `sqlite` 数据库，这样你就可以用 `where pid = ?` 来级联向下找城市了
