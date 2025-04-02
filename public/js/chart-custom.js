(function(jQuery) {

    "use strict";

// for apexchart
function apexChartUpdate(chart, detail) {
    let color = getComputedStyle(document.documentElement).getPropertyValue('--dark');
    if (detail.dark) {
      color = getComputedStyle(document.documentElement).getPropertyValue('--white');
    }
    chart.updateOptions({
      chart: {
        foreColor: color
      }
    })
  }

// for am chart
function amChartUpdate(chart, detail) {
  // let color = getComputedStyle(document.documentElement).getPropertyValue('--dark');
  if (detail.dark) {
    // color = getComputedStyle(document.documentElement).getPropertyValue('--white');
    chart.stroke = am4core.color(getComputedStyle(document.documentElement).getPropertyValue('--white'));
  }
  chart.validateData();
}

/*---------------------------------------------------------------------
   Apex Charts
-----------------------------------------------------------------------*/
if (jQuery("#apex-basic").length) {
  options = {
    chart: {
      height: 350,
      type: "line",
      zoom: {
        enabled: !1
      }
    },
    colors: ["#4788ff"],
    series: [{
      name: "Desktops",
      data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
    }],
    dataLabels: {
      enabled: !1
    },
    stroke: {
      curve: "straight"
    },
    title: {
      text: "Product Trends by Month",
      align: "left"
    },
    grid: {
      row: {
        colors: ["#f3f3f3", "transparent"],
        opacity: .5
      }
    },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"]
    }
  };
  if(typeof ApexCharts !== typeof undefined){
    (chart = new ApexCharts(document.querySelector("#apex-basic"), options)).render()
    const body = document.querySelector('body')
    if (body.classList.contains('dark')) {
      apexChartUpdate(chart, {
        dark: true
      })
    }

    document.addEventListener('ChangeColorMode', function (e) {
      apexChartUpdate(chart, e.detail)
    })
  }
}
if (jQuery("#apex-line-area").length) {
  options = {
    chart: {
      height: 350,
      type: "area"
    },
    dataLabels: {
      enabled: !1
    },
    stroke: {
      curve: "smooth"
    },
    colors: ["#4788ff", "#ff4b4b"],
    series: [{
      name: "Series1",
      data: [31, 40, 28, 51, 42, 109, 100]
    }, {
      name: "Series2",
      data: [11, 32, 45, 32, 34, 52, 41]
    }],
    xaxis: {
      type: "datetime",
      categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"]
    },
    tooltip: {
      x: {
        format: "dd/MM/yy HH:mm"
      }
    }
  };
  (chart = new ApexCharts(document.querySelector("#apex-line-area"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#apex-bar").length) {
  options = {
    chart: {
      height: 350,
      type: "bar"
    },
    plotOptions: {
      bar: {
        horizontal: !0
      }
    },
    dataLabels: {
      enabled: !1
    },
    colors: ["#4788ff"],
    series: [{
        name:'Series',
      data: [470, 540, 580, 690, 1100, 1200, 1380]
    }],
    xaxis: {
      categories: ["Netherlands", "Italy", "France", "Japan", "United States", "China", "Germany"]
    }
  };
  (chart = new ApexCharts(document.querySelector("#apex-bar"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#apex-column").length) {
  options = {
    chart: {
      height: 350,
      type: "bar"
    },
    plotOptions: {
      bar: {
        horizontal: !1,
        columnWidth: "55%",
        endingShape: "rounded"
      }
    },
    dataLabels: {
      enabled: !1
    },
    stroke: {
      show: !0,
      width: 2,
      colors: ["transparent"]
    },
    colors: ["#4788ff", "#37e6b0", "#ff4b4b"],
    series: [{
      name: "Net Profit",
      data: [44, 55, 57, 56, 61, 58]
    }, {
      name: "Revenue",
      data: [76, 85, 101, 98, 87, 105]
    }, {
      name: "Free Cash Flow",
      data: [35, 41, 36, 26, 45, 48]
    }],
    xaxis: {
      categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"]
    },
    yaxis: {
      title: {
        text: "$ (thousands)"
      }
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      y: {
        formatter: function(e) {
          return "$ " + e + " thousands"
        }
      }
    }
  };
  (chart = new ApexCharts(document.querySelector("#apex-column"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#apex-mixed-chart").length) {
  options = {
    chart: {
      height: 350,
      type: "line",
      stacked: !1
    },
    stroke: {
      width: [0, 2, 5],
      curve: "smooth"
    },
    plotOptions: {
      bar: {
        columnWidth: "50%"
      }
    },
    colors: ["#ff4b4b", "#37e6b0", "#4788ff"],
    series: [{
      name: "Facebook",
      type: "column",
      data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
    }, {
      name: "Vine",
      type: "area",
      data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
    }, {
      name: "Dribbble",
      type: "line",
      data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
    }],
    fill: {
      opacity: [.85, .25, 1],
      gradient: {
        inverseColors: !1,
        shade: "light",
        type: "vertical",
        opacityFrom: .85,
        opacityTo: .55,
        stops: [0, 100, 100, 100]
      }
    },
    labels: ["01/01/2003", "02/01/2003", "03/01/2003", "04/01/2003", "05/01/2003", "06/01/2003", "07/01/2003", "08/01/2003", "09/01/2003", "10/01/2003", "11/01/2003"],
    markers: {
      size: 0
    },
    xaxis: {
      type: "datetime"
    },
    yaxis: {
      min: 0
    },
    tooltip: {
      shared: !0,
      intersect: !1,
      y: {
        formatter: function(e) {
          return void 0 !== e ? e.toFixed(0) + " views" : e
        }
      }
    },
    legend: {
      labels: {
        useSeriesColors: !0
      },
      markers: {
        customHTML: [function() {
          return ""
        }, function() {
          return ""
        }, function() {
          return ""
        }]
      }
    }
  };
  (chart = new ApexCharts(document.querySelector("#apex-mixed-chart"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#apex-candlestick-chart").length) {
  options = {
    chart: {
      height: 350,
      type: "candlestick"
    },
    colors: ["#4788ff", "#37e6b0", "#37e6b0"],
    series: [{
      data: [{
        x: new Date(15387786e5),
        y: [6629.81, 6650.5, 6623.04, 6633.33]
      }, {
        x: new Date(15387804e5),
        y: [6632.01, 6643.59, 6620, 6630.11]
      }, {
        x: new Date(15387822e5),
        y: [6630.71, 6648.95, 6623.34, 6635.65]
      }, {
        x: new Date(1538784e6),
        y: [6635.65, 6651, 6629.67, 6638.24]
      }, {
        x: new Date(15387858e5),
        y: [6638.24, 6640, 6620, 6624.47]
      }, {
        x: new Date(15387876e5),
        y: [6624.53, 6636.03, 6621.68, 6624.31]
      }, {
        x: new Date(15387894e5),
        y: [6624.61, 6632.2, 6617, 6626.02]
      }, {
        x: new Date(15387912e5),
        y: [6627, 6627.62, 6584.22, 6603.02]
      }, {
        x: new Date(1538793e6),
        y: [6605, 6608.03, 6598.95, 6604.01]
      }, {
        x: new Date(15387948e5),
        y: [6604.5, 6614.4, 6602.26, 6608.02]
      }, {
        x: new Date(15387966e5),
        y: [6608.02, 6610.68, 6601.99, 6608.91]
      }, {
        x: new Date(15387984e5),
        y: [6608.91, 6618.99, 6608.01, 6612]
      }, {
        x: new Date(15388002e5),
        y: [6612, 6615.13, 6605.09, 6612]
      }, {
        x: new Date(1538802e6),
        y: [6612, 6624.12, 6608.43, 6622.95]
      }, {
        x: new Date(15388038e5),
        y: [6623.91, 6623.91, 6615, 6615.67]
      }, {
        x: new Date(15388056e5),
        y: [6618.69, 6618.74, 6610, 6610.4]
      }, {
        x: new Date(15388074e5),
        y: [6611, 6622.78, 6610.4, 6614.9]
      }, {
        x: new Date(15388092e5),
        y: [6614.9, 6626.2, 6613.33, 6623.45]
      }, {
        x: new Date(1538811e6),
        y: [6623.48, 6627, 6618.38, 6620.35]
      }, {
        x: new Date(15388128e5),
        y: [6619.43, 6620.35, 6610.05, 6615.53]
      }, {
        x: new Date(15388146e5),
        y: [6615.53, 6617.93, 6610, 6615.19]
      }, {
        x: new Date(15388164e5),
        y: [6615.19, 6621.6, 6608.2, 6620]
      }, {
        x: new Date(15388182e5),
        y: [6619.54, 6625.17, 6614.15, 6620]
      }, {
        x: new Date(153882e7),
        y: [6620.33, 6634.15, 6617.24, 6624.61]
      }, {
        x: new Date(15388218e5),
        y: [6625.95, 6626, 6611.66, 6617.58]
      }, {
        x: new Date(15388236e5),
        y: [6619, 6625.97, 6595.27, 6598.86]
      }, {
        x: new Date(15388254e5),
        y: [6598.86, 6598.88, 6570, 6587.16]
      }, {
        x: new Date(15388272e5),
        y: [6588.86, 6600, 6580, 6593.4]
      }, {
        x: new Date(1538829e6),
        y: [6593.99, 6598.89, 6585, 6587.81]
      }, {
        x: new Date(15388308e5),
        y: [6587.81, 6592.73, 6567.14, 6578]
      }, {
        x: new Date(15388326e5),
        y: [6578.35, 6581.72, 6567.39, 6579]
      }, {
        x: new Date(15388344e5),
        y: [6579.38, 6580.92, 6566.77, 6575.96]
      }, {
        x: new Date(15388362e5),
        y: [6575.96, 6589, 6571.77, 6588.92]
      }, {
        x: new Date(1538838e6),
        y: [6588.92, 6594, 6577.55, 6589.22]
      }, {
        x: new Date(15388398e5),
        y: [6589.3, 6598.89, 6589.1, 6596.08]
      }, {
        x: new Date(15388416e5),
        y: [6597.5, 6600, 6588.39, 6596.25]
      }, {
        x: new Date(15388434e5),
        y: [6598.03, 6600, 6588.73, 6595.97]
      }, {
        x: new Date(15388452e5),
        y: [6595.97, 6602.01, 6588.17, 6602]
      }, {
        x: new Date(1538847e6),
        y: [6602, 6607, 6596.51, 6599.95]
      }, {
        x: new Date(15388488e5),
        y: [6600.63, 6601.21, 6590.39, 6591.02]
      }, {
        x: new Date(15388506e5),
        y: [6591.02, 6603.08, 6591, 6591]
      }, {
        x: new Date(15388524e5),
        y: [6591, 6601.32, 6585, 6592]
      }, {
        x: new Date(15388542e5),
        y: [6593.13, 6596.01, 6590, 6593.34]
      }, {
        x: new Date(1538856e6),
        y: [6593.34, 6604.76, 6582.63, 6593.86]
      }, {
        x: new Date(15388578e5),
        y: [6593.86, 6604.28, 6586.57, 6600.01]
      }, {
        x: new Date(15388596e5),
        y: [6601.81, 6603.21, 6592.78, 6596.25]
      }, {
        x: new Date(15388614e5),
        y: [6596.25, 6604.2, 6590, 6602.99]
      }, {
        x: new Date(15388632e5),
        y: [6602.99, 6606, 6584.99, 6587.81]
      }, {
        x: new Date(1538865e6),
        y: [6587.81, 6595, 6583.27, 6591.96]
      }, {
        x: new Date(15388668e5),
        y: [6591.97, 6596.07, 6585, 6588.39]
      }, {
        x: new Date(15388686e5),
        y: [6587.6, 6598.21, 6587.6, 6594.27]
      }, {
        x: new Date(15388704e5),
        y: [6596.44, 6601, 6590, 6596.55]
      }, {
        x: new Date(15388722e5),
        y: [6598.91, 6605, 6596.61, 6600.02]
      }, {
        x: new Date(1538874e6),
        y: [6600.55, 6605, 6589.14, 6593.01]
      }, {
        x: new Date(15388758e5),
        y: [6593.15, 6605, 6592, 6603.06]
      }]
    }],
    title: {
      text: "CandleStick Chart",
      align: "left"
    },
    xaxis: {
      type: "datetime"
    },
    yaxis: {
      tooltip: {
        enabled: !0
      }
    }
  };
  (chart = new ApexCharts(document.querySelector("#apex-candlestick-chart"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#apex-bubble-chart").length) {
  function generateData(e, t, a) {
    for (var n = 0, o = []; n < t;) {
      var r = Math.floor(Math.random() * (a.max - a.min + 1)) + a.min,
        i = Math.floor(61 * Math.random()) + 15;
      o.push([e, r, i]), e += 864e5, n++
    }
    return o
  }
  options = {
    chart: {
      height: 350,
      type: "bubble"
    },
    dataLabels: {
      enabled: !1
    },
    series: [{
      name: "Product1",
      data: generateData(new Date("11 Feb 2017 GMT").getTime(), 20, {
        min: 10,
        max: 40
      })
    }, {
      name: "Product2",
      data: generateData(new Date("11 Feb 2017 GMT").getTime(), 20, {
        min: 10,
        max: 40
      })
    }, {
      name: "Product3",
      data: generateData(new Date("11 Feb 2017 GMT").getTime(), 20, {
        min: 10,
        max: 40
      })
    }],
    fill: {
      type: "gradient"
    },
    colors: ["#4788ff", "#37e6b0", "#37e6b0"],
    title: {
      text: "3D Bubble Chart"
    },
    xaxis: {
      tickAmount: 12,
      type: "datetime",
      labels: {
        rotate: 0
      }
    },
    yaxis: {
      max: 40
    },
    theme: {
      palette: "palette2"
    }
  };
  (chart = new ApexCharts(document.querySelector("#apex-bubble-chart"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#apex-scatter-chart").length) {
  options = {
    chart: {
      height: 350,
      type: "scatter",
      zoom: {
        enabled: !0,
        type: "xy"
      }
    },
    colors: ["#4788ff", "#ff4b4b", "#37e6b0"],
    series: [{
      name: "SAMPLE A",
      data: [
        [16.4, 5.4],
        [21.7, 2],
        [10.9, 0],
        [10.9, 8.2],
        [16.4, 0],
        [16.4, 1.8],
        [13.6, .3],
        [13.6, 0],
        [29.9, 0],
        [27.1, 2.3],
        [16.4, 0],
        [13.6, 3.7],
        [10.9, 5.2],
        [16.4, 6.5],
        [10.9, 0],
        [24.5, 7.1],
        [10.9, 0],
        [8.1, 4.7]
      ]
    }, {
      name: "SAMPLE B",
      data: [
        [36.4, 13.4],
        [1.7, 11],
        [1.9, 9],
        [1.9, 13.2],
        [1.4, 7],
        [6.4, 8.8],
        [3.6, 4.3],
        [1.6, 10],
        [9.9, 2],
        [7.1, 15],
        [1.4, 0],
        [3.6, 13.7],
        [1.9, 15.2],
        [6.4, 16.5],
        [.9, 10],
        [4.5, 17.1],
        [10.9, 10],
        [.1, 14.7]
      ]
    }, {
      name: "SAMPLE C",
      data: [
        [21.7, 3],
        [23.6, 3.5],
        [28, 4],
        [27.1, .3],
        [16.4, 4],
        [13.6, 0],
        [19, 5],
        [22.4, 3],
        [24.5, 3],
        [32.6, 3],
        [27.1, 4],
        [29.6, 6],
        [31.6, 8],
        [21.6, 5],
        [20.9, 4],
        [22.4, 0],
        [32.6, 10.3],
        [29.7, 20.8]
      ]
    }],
    xaxis: {
      tickAmount: 5,
      labels: {
        formatter: function(e) {
          return parseFloat(e).toFixed(1)
        }
      }
    },
    yaxis: {
      tickAmount: 5
    }
  };
  (chart = new ApexCharts(document.querySelector("#apex-scatter-chart"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#apex-radialbar-chart").length) {
  options = {
    chart: {
      height: 350,
      type: "radialBar"
    },
    plotOptions: {
      radialBar: {
        dataLabels: {
          name: {
            fontSize: "22px"
          },
          value: {
            fontSize: "16px"
          },
          total: {
            show: !0,
            label: "Total",
            formatter: function(e) {
              return 249
            }
          }
        }
      }
    },
    series: [44, 55, 67, 83],
    labels: ["Apples", "Oranges", "Bananas", "Berries"],
    colors: ["#4788ff", "#ff4b4b", "#876cfe", "#37e6b0"]
  };
  (chart = new ApexCharts(document.querySelector("#apex-radialbar-chart"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#apex-pie-chart").length) {
  options = {
    chart: {
      width: 380,
      type: "pie"
    },
    labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
    series: [44, 55, 13, 43, 22],
    colors: ["#4788ff", "#ff4b4b", "#876cfe", "#37e6b0", "#c8c8c8"],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: "bottom"
        }
      }
    }]
  };
  (chart = new ApexCharts(document.querySelector("#apex-pie-chart"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#advanced-chart").length) {
  var options = {
    series: [
    {
      name: 'Bob',
      data: [
        {
          x: 'Design',
          y: [
            new Date('2019-03-05').getTime(),
            new Date('2019-03-08').getTime()
          ]
        },
        {
          x: 'Code',
          y: [
            new Date('2019-03-02').getTime(),
            new Date('2019-03-05').getTime()
          ]
        },
        {
          x: 'Code',
          y: [
            new Date('2019-03-05').getTime(),
            new Date('2019-03-07').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-03').getTime(),
            new Date('2019-03-09').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-08').getTime(),
            new Date('2019-03-11').getTime()
          ]
        },
        {
          x: 'Validation',
          y: [
            new Date('2019-03-11').getTime(),
            new Date('2019-03-16').getTime()
          ]
        },
        {
          x: 'Design',
          y: [
            new Date('2019-03-01').getTime(),
            new Date('2019-03-03').getTime()
          ]
        }
      ]
    },
    {
      name: 'Joe',
      data: [
        {
          x: 'Design',
          y: [
            new Date('2019-03-02').getTime(),
            new Date('2019-03-05').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-06').getTime(),
            new Date('2019-03-16').getTime()
          ]
        },
        {
          x: 'Code',
          y: [
            new Date('2019-03-03').getTime(),
            new Date('2019-03-07').getTime()
          ]
        },
        {
          x: 'Deployment',
          y: [
            new Date('2019-03-20').getTime(),
            new Date('2019-03-22').getTime()
          ]
        },
        {
          x: 'Design',
          y: [
            new Date('2019-03-10').getTime(),
            new Date('2019-03-16').getTime()
          ]
        }
      ]
    },
    {
      name: 'Dan',
      data: [
        {
          x: 'Code',
          y: [
            new Date('2019-03-10').getTime(),
            new Date('2019-03-17').getTime()
          ]
        },
        {
          x: 'Validation',
          y: [
            new Date('2019-03-05').getTime(),
            new Date('2019-03-09').getTime()
          ]
        },
      ]
    }
  ],
    colors: ["#4788ff", "#ff4b4b", "#37e6b0"],
    chart: {
    height: 450,
    type: 'rangeBar'
  },
  plotOptions: {
    bar: {
      horizontal: true,
      barHeight: '80%'
    }
  },
  xaxis: {
    type: 'datetime'
  },
  stroke: {
    width: 1
  },
  fill: {
    type: 'solid',
    opacity: 0.6
  },
  legend: {
    position: 'top',
    horizontalAlign: 'left'
  }
  };

  (chart = new ApexCharts(document.querySelector("#advanced-chart"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if (jQuery("#radar-multiple-chart").length) {
  var options = {
    series: [{
    name: 'Series 1',
    data: [80, 50, 30, 40, 100, 20],
  }, {
    name: 'Series 2',
    data: [20, 30, 40, 80, 20, 80],
  }, {
    name: 'Series 3',
    data: [44, 76, 78, 13, 43, 10],
  }],
  colors: ["#4788ff", "#ff4b4b", "#37e6b0"],
    chart: {
    height: 350,
    type: 'radar',
    dropShadow: {
      enabled: true,
      blur: 1,
      left: 1,
      top: 1
    }
  },
  title: {
    text: 'Radar Chart - Multi Series'
  },
  stroke: {
    width: 2
  },
  fill: {
    opacity: 0.1
  },
  markers: {
    size: 0
  },
  xaxis: {
    categories: ['2011', '2012', '2013', '2014', '2015', '2016']
  }
  };

  (chart = new ApexCharts(document.querySelector("#radar-multiple-chart"), options)).render()
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}

/*--------------Widget Chart 1----------------*/

var options = {
    chart: {
        height: 80,
        type: 'area',
        sparkline: {
            enabled: true
        },
        group: 'sparklines',

    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 3,
        curve: 'smooth'
    },
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.5,
            opacityTo: 0,
        }
    },

    series: [{
        name: 'series1',
        data: [60, 15, 50, 30, 70]
    }, ],
    colors: ['#50b5ff'],

    xaxis: {
        type: 'datetime',
        categories: ["2018-08-19T00:00:00", "2018-09-19T01:30:00", "2018-10-19T02:30:00", "2018-11-19T01:30:00", "2018-12-19T01:30:00"],
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
};

if(jQuery('#chart-1').length){
    var chart = new ApexCharts(
        document.querySelector("#chart-1"),
        options
    );
    chart.render();
}


/*--------------Widget Chart 2----------------*/
var options = {
    chart: {
        height: 80,
        type: 'area',
        sparkline: {
            enabled: true
        },
        group: 'sparklines',

    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 3,
        curve: 'smooth'
    },
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.5,
            opacityTo: 0,
        }
    },
    series: [{
        name: 'series1',
        data: [70, 40, 60, 30, 60]
    }, ],
    colors: ['#fd7e14'],

    xaxis: {
        type: 'datetime',
        categories: ["2018-08-19T00:00:00", "2018-09-19T01:30:00", "2018-10-19T02:30:00", "2018-11-19T01:30:00", "2018-12-19T01:30:00"],
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
};

if(jQuery('#chart-2').length){
    var chart = new ApexCharts(
        document.querySelector("#chart-2"),
        options
    );

    chart.render();
}

/*--------------Widget Chart 3----------------*/
var options = {
    chart: {
        height: 80,
        type: 'area',
        sparkline: {
            enabled: true
        },
        group: 'sparklines',

    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 3,
        curve: 'smooth'
    },
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.5,
            opacityTo: 0,
        }
    },
    series: [{
        name: 'series1',
        data: [60, 40, 60, 40, 70]
    }, ],
    colors: ['#49f0d3'],

    xaxis: {
        type: 'datetime',
        categories: ["2018-08-19T00:00:00", "2018-09-19T01:30:00", "2018-10-19T02:30:00", "2018-11-19T01:30:00", "2018-12-19T01:30:00"],
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
};
if(jQuery('#chart-3').length){
    var chart = new ApexCharts(
        document.querySelector("#chart-3"),
        options
    );
    chart.render();
}

/*--------------Widget Chart 4----------------*/
var options = {
    chart: {
        height: 80,
        type: 'area',
        sparkline: {
            enabled: true
        },
        group: 'sparklines',

    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 3,
        curve: 'smooth'
    },
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.5,
            opacityTo: 0,
        }
    },
    series: [{
        name: 'series1',
        data: [75, 30, 60, 35, 60]
    }, ],
    colors: ['#ff9b8a'],

    xaxis: {
        type: 'datetime',
        categories: ["2018-08-19T00:00:00", "2018-09-19T01:30:00", "2018-10-19T02:30:00", "2018-11-19T01:30:00", "2018-12-19T01:30:00"],
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
};

if(jQuery('#chart-4').length){
    var chart = new ApexCharts(
        document.querySelector("#chart-4"),
        options
    );

    chart.render();
}

/*--------------Widget Box----------------*/

if(jQuery('#iq-chart-box1').length){
    var options = {
      series: [{
        name: "Total sales",
        data: [10, 10, 35, 10]
    }],
      colors: ["#50b5ff"],
      chart: {
      height: 50,
      width: 100,
      type: 'line',
      sparkline: {
          enabled: true,
      },
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: '',
      align: 'left'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
      },
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar'],
    }
    };

    var chart = new ApexCharts(document.querySelector("#iq-chart-box1"), options);
    chart.render();
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if(jQuery('#iq-chart-box2').length){
    var options = {
      series: [{
        name: "Sale Today",
        data: [10, 10, 35, 10]
    }],
      colors: ["#ff9b8a"],
      chart: {
      height: 50,
      width: 100,
      type: 'line',
      sparkline: {
          enabled: true,
      },
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: '',
      align: 'left'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
      },
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar'],
    }
    };

    var chart = new ApexCharts(document.querySelector("#iq-chart-box2"), options);
    chart.render();
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if(jQuery('#iq-chart-box3').length){
    var options = {
      series: [{
        name: "Total Classon",
        data: [10, 10, 35, 10]
    }],
      colors: ["#49f0d3"],
      chart: {
      height: 50,
      width: 100,
      type: 'line',
      sparkline: {
          enabled: true,
      },
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: '',
      align: 'left'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
      },
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar'],
    }
    };

    var chart = new ApexCharts(document.querySelector("#iq-chart-box3"), options);
    chart.render();
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}
if(jQuery('#iq-chart-box4').length){
    var options = {
      series: [{
        name: "Total Profit",
        data: [10, 10, 35, 10]
    }],
      colors: ["#fd7e14"],
      chart: {
      height: 50,
      width: 100,
      type: 'line',
      sparkline: {
          enabled: true,
      },
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: '',
      align: 'left'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
      },
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar'],
    }
    };

    var chart = new ApexCharts(document.querySelector("#iq-chart-box4"), options);
    chart.render();
  const body = document.querySelector('body')
  if (body.classList.contains('dark')) {
    apexChartUpdate(chart, {
      dark: true
    })
  }

  document.addEventListener('ChangeColorMode', function (e) {
    apexChartUpdate(chart, e.detail)
  })
}

/*--------------Widget Chart ----------------*/
function getNewSeries(e, t) {
  var a = e + TICKINTERVAL;
  lastDate = a;
  for (var n = 0; n < data.length - 10; n++) data[n].x = a - XAXISRANGE - TICKINTERVAL, data[n].y = 0;
  data.push({
    x: a,
    y: Math.floor(Math.random() * (t.max - t.min + 1)) + t.min
  })
}
if (jQuery("#chart-9").length) {
    var chart9 = new ApexCharts(document.querySelector("#chart-9"), options);
    chart9.render(), window.setInterval(function() {
        getNewSeries(lastDate, {
            min: 10,
            max: 90
        }), jQuery("#chart-9").length && chart9.updateSeries([{
            data: data
        }])
    }, 1e3)
}

function generateData(e, t, a) {
    for (var n = 0, o = []; n < t;) {
        var r = Math.floor(750 * Math.random()) + 1,
            i = Math.floor(Math.random() * (a.max - a.min + 1)) + a.min,
            c = Math.floor(61 * Math.random()) + 15;
        o.push([r, i, c]), 864e5, n++
    }
    return o
}
options = {
    chart: {
        height: 440,
        type: "bubble",
        stacked: !1,
        toolbar: {
            show: !1
        },
        animations: {
            enabled: !0,
            easing: "linear",
            dynamicAnimation: {
                speed: 1e3
            }
        },
        sparkline: {
            enabled: !0
        },
        group: "sparklines"
    },
    dataLabels: {
        enabled: !1
    },
    series: [{
        name: "Bubble1",
        data: generateData(new Date("11 Feb 2017 GMT").getTime(), 10, {
            min: 10,
            max: 60
        })
    }, {
        name: "Bubble2",
        data: generateData(new Date("11 Feb 2017 GMT").getTime(), 10, {
            min: 10,
            max: 60
        })
    }, {
        name: "Bubble3",
        data: generateData(new Date("11 Feb 2017 GMT").getTime(), 10, {
            min: 10,
            max: 60
        })
    }, {
        name: "Bubble4",
        data: generateData(new Date("11 Feb 2017 GMT").getTime(), 10, {
            min: 10,
            max: 60
        })
    }],
    fill: {
        opacity: .8
    },
    title: {
        show: !1
    },
    xaxis: {
        tickAmount: 8,
        type: "category",
        labels: {
            show: !1
        }
    },
    yaxis: {
        max: 70,
        labels: {
            show: !1
        }
    },
    legend: {
        show: !1
    }
};

/*-------------- Widget Chart End ----------------*/
/*--------index-----*/
if (jQuery("#site-trafic-chart").length) {
  var options = {
          series: [{
            name: "series1",
            data: [0, 70, 30, 90, 80, 150]
        }, {
          name: 'series2',
          data: [0, 20, 90, 70, 130, 110]
        }],
        colors: ['#fe721c','#4788ff'],
          chart: {
          height: 365,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: 'Product Trends by Month',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        },
        yaxis: {
          title: {
            text: ''
          },
          labels: {
            offsetX: -20,
            offsetY: 0
          },
        }
        };

        if(typeof ApexCharts !== typeof undefined){
          var chart = new ApexCharts(document.querySelector("#site-trafic-chart"), options);
          chart.render();
          const body = document.querySelector('body')
          if (body.classList.contains('dark')) {
            apexChartUpdate(chart, {
              dark: true
            })
          }

          document.addEventListener('ChangeColorMode', function (e) {
            apexChartUpdate(chart, e.detail)
          })
        }
}

/*---------------------------------------------------------------------
   Editable Table
-----------------------------------------------------------------------*/
const $tableID = $('#table');
 const $BTN = $('#export-btn');
 const $EXPORT = $('#export');

 const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half">
    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
  </td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;

 $('.table-add').on('click', 'i', () => {

   const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

   if ($tableID.find('tbody tr').length === 0) {

     $('tbody').append(newTr);
   }

   $tableID.find('table').append($clone);
 });

 $tableID.on('click', '.table-remove', function () {

   $(this).parents('tr').detach();
 });

 $tableID.on('click', '.table-up', function () {

   const $row = $(this).parents('tr');

   if ($row.index() === 1) {
     return;
   }

   $row.prev().before($row.get(0));
 });

 $tableID.on('click', '.table-down', function () {

   const $row = $(this).parents('tr');
   $row.next().after($row.get(0));
 });

 // A few jQuery helpers for exporting only
 jQuery.fn.pop = [].pop;
 jQuery.fn.shift = [].shift;

 $BTN.on('click', () => {

   const $rows = $tableID.find('tr:not(:hidden)');
   const headers = [];
   const data = [];

   // Get the headers (add special header logic here)
   $($rows.shift()).find('th:not(:empty)').each(function () {

     headers.push($(this).text().toLowerCase());
   });

   // Turn all existing rows into a loopable array
   $rows.each(function () {
     const $td = $(this).find('td');
     const h = {};

     // Use the headers from earlier to name our hash keys
     headers.forEach((header, i) => {

       h[header] = $td.eq(i).text();
     });

     data.push(h);
   });

   // Output the result
   $EXPORT.text(JSON.stringify(data));
 });

/*---------------------------------------------------------------------
    Form Wizard - 1
-----------------------------------------------------------------------*/

$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#top-tab-list li").eq($("fieldset").index(next_fs)).addClass("active");
    $("#top-tab-list li").eq($("fieldset").index(current_fs)).addClass("done");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative',

    });

    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });

    $(".previous").click(function(){

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#top-tab-list li").eq($("fieldset").index(current_fs)).removeClass("active");
    $("#top-tab-list li").eq($("fieldset").index(previous_fs)).removeClass("done");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });

    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }

    $(".submit").click(function(){
    return false;
    })

});

 /*---------------------------------------------------------------------
   validate form wizard
-----------------------------------------------------------------------*/

$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.addClass('active');
            $item.parent().addClass('active');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='email'],input[type='password'],input[type='url'],textarea"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.active').trigger('click');
});
 /*---------------------------------------------------------------------
   Vertical form wizard
-----------------------------------------------------------------------*/
$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#top-tabbar-vertical li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });

    $(".previous").click(function(){

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#top-tabbar-vertical li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });

    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }

    $(".submit").click(function(){
    return false;
    })

});


/*---------------------------------------------------------------------
   Profile Image Edit
-----------------------------------------------------------------------*/

$(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function(){
        readURL(this);
    });

    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});

// ratting
$(function() {
  if(typeof $.fn.barrating !== typeof undefined){
    $('#example').barrating({
      theme: 'fontawesome-stars'
    });
    $('#bars-number').barrating({
      theme: 'bars-1to10'
    });
    $('#movie-rating').barrating('show',{
      theme: 'bars-movie'
    });
    $('#movie-rating').barrating('set', 'Mediocre');
    $('#pill-rating').barrating({
      theme: 'bars-pill',
      showValues: true,
      showSelectedRating: false,
      onSelect: function(value, text) {
        alert('Selected rating: ' + value);
    }
    });
  }
  if (typeof $.fn.mdbRate !== typeof undefined) {
    $('#rateMe1').mdbRate();
    $('#face-rating').mdbRate();
  }
});

// quill
if (jQuery("#editor").length) {
  var quill = new Quill('#editor', {
  theme: 'snow'
  });
}
  // With Tooltip
  if (jQuery("#quill-toolbar").length) {
  var quill = new Quill('#quill-toolbar', {
      modules: {
        toolbar: '#quill-tool'
      },
      placeholder: 'Compose an epic...',
      theme: 'snow'
  });
  // Enable all tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // Can control programmatically too
  $('.ql-italic').mouseover();
  setTimeout(function() {
      $('.ql-italic').mouseout();
  }, 2500);
}
  // file upload
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  //  gallary grid
if(typeof $.fn.magnificPopup !== typeof undefined){
  $('.image-popup-vertical-fit').magnificPopup({
      type: 'image',
      mainClass: 'mfp-with-zoom',
      gallery: {
        enabled: true
      },
      zoom: {
        enabled: true,
        duration: 300,
        easing: 'ease-in-out',
        opener: function (openerElement) {
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
      }
  });
}

    if(typeof $.fn.magnificPopup !== typeof undefined){
      $('.gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1]
            }
      });
    }

})(jQuery);


