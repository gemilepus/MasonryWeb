<?php
function b4_card()
{
?>
<div class="grid-item" style="width: 20%">
    <div class="card">
        <!--                    <img src="..." class="card-img-top" alt="...">-->
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<?php
}
?>

<?php
function b4_toast()
{
?>
<div class="grid-item" style="width: 20rem;">
    <div class="toast" data-autohide="false">
        <div class="toast-header">
            <strong class="mr-auto text-primary">Toast Header</strong>
            <small class="text-muted">5 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
            Some text inside the toast body
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.toast').toast('show');
});
</script>
<?php
}
?>

<?php
function b4_table()
{
?>
<div id="b4_table" class="grid-item box">
    <h4>{{message}}</h4>
    <table class="table" style="background: white;width: 100%;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">name</th>
                <th scope="col">cash</th>
                <th scope="col">icash</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item, key) in data" :key="key">
                <td>{{ item.name }}</td>
                <td>{{ item.cash }}</td>
                <td>{{ item.icash }}</td>
            </tr>
        </tbody>
    </table>
</div>
<script>
var b4_table = Vue.createApp({
    data() {
        return {
            message: 'title',
            data: [{
                    name: 'Jack',
                    cash: 100,
                    icash: 500,
                },
                {
                    name: 'Dog',
                    cash: 10000,
                    icash: 5000,
                },
                {
                    name: 'Nick',
                    cash: 500,
                    icash: 500,
                }
            ]
        }
    },
    methods: {

    },
    created: function() {


    }
}).mount('#b4_table');
</script>
<?php
}
?>

<?php
function b4_carousel()
{
?>
<div class="grid-item" style="width: 40%;">

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                    aria-label="Placeholder: First slide">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                        dy=".3em">First slide</text>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                    aria-label="Placeholder: First slide">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                        dy=".3em">First slide</text>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                    aria-label="Placeholder: First slide">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                        dy=".3em">First slide</text>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
<?php
}
?>

<?php
function b4_list()
{
?>
<div id="b4_list" class="box grid-item" style="height: 350px;">
    <ul class="list-group">
        <li class="list-group-item">{{ message }}</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch modal
        </button>
    </ul>

    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="99999" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table">
                        <thead>
                        </thead>
                        <tbody>
                            <tr v-for="(item, key) in data" :key="key">
                                <td>{{ item.name }}</td>
                                <td>{{ item.cash }}</td>
                                <td>{{ item.icash }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var b4_list = Vue.createApp({
    data() {
        return {
            message: '公告',
            data: [{
                    name: 'Jack',
                    cash: 100,
                    icash: 500,
                },
                {
                    name: 'Dog',
                    cash: 10000,
                    icash: 5000,
                },
                {
                    name: 'Nick',
                    cash: 500,
                    icash: 500,
                }
            ]
        }
    },
    methods: {
        updatePosts: function() {
            var d = new Date();
            this.message = d.toLocaleString();

        }
    },
    created: function() {

        setInterval(function() {
            b4_list.updatePosts();
        }, 1000);

        for (var i = 0; i < 100; i++) {
            this.data.push(this.data[0]);
        }

    }
}).mount('#b4_list');
</script>
<?php
}
?>

<?php
function b4_test()
{
?>
<div class="box">

    <div class="card" style="background-color: rgba(0, 0, 0, 0.0);height: 100%;">
        <!--            <img src="s.png" style="max-height: 50%" class="card-img-top">-->
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>

        </div>

        <div class="card-footer" style="background-color: rgba(0, 0, 0, 0.2);">
            <small class="text-muted"></small>
        </div>
    </div>


</div>
<?php
}
?>


<?php
function b4_box($img_path)
{
?>
<div class="box col-2">
    <div class="card" style="background-color: rgba(0, 0, 0, 0.0);height: 100%;">
        <img src="<?php echo $img_path; ?>" style="max-height: 50%" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>

        </div>
        <p class="tut-title"># <?php echo $img_path; ?></p>
        <!--            <div class="card-footer" style="background-color: rgba(0, 0, 0, 0.2);">-->
        <!--                <small class="text-muted"></small>-->
        <!--            </div>-->
    </div>
</div>
<?php
}
?>


<?php
function b4_chart()
{
?>
<div class="box" id="chart-container" style="height: 240px;"></div>
<script>
var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false
});
var app = {};

var option;

option = {
    legend: {
        top: 'bottom'
    },
    title: {
        text: 'title',
        textStyle: {
            color: '#111111'
        }
    },
    toolbox: {
        show: true,
        feature: {
            mark: {
                show: true
            },
            restore: {
                show: true,
                title: '更新'
            },
            saveAsImage: {
                show: true,
                title: '儲存圖片'
            }
        }
    },
    series: [{
        name: 'Access From',
        type: 'pie',
        radius: ['40%', '70%'],
        avoidLabelOverlap: false,
        itemStyle: {
            borderRadius: 10,
            borderColor: '#fff',
            borderWidth: 2
        },
        label: {
            normal: {
                show: true,
                position: 'inside',
                formatter: '{d}%', //模板變數有 {a}、{b}、{c}、{d}，分別表示系列名，資料名，資料值，百分比。{d}資料會根據value值計算百分比

                textStyle: {
                    align: 'center',
                    baseline: 'middle',
                    fontFamily: '微軟雅黑',
                    fontSize: 15,
                    fontWeight: 'bolder'
                }
            },
        },
        emphasis: {
            label: {
                show: true,
                fontSize: '40',
                fontWeight: 'bold'
            }
        },
        labelLine: {
            show: false
        },
        data: [{
                value: 1048,
                name: 'Search Engine'
            },
            {
                value: 735,
                name: 'Direct'
            },
            {
                value: 580,
                name: 'Email'
            }
        ]
    }]
};

if (option && typeof option === 'object') {
    myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);
</script>
<?php
}
?>


<?php
function b4_barchart()
{
?>
<div class="box" style="height: 300px;">

    <div id="barchart-container" style="height: 100%;padding: 5px;"></div>

</div>
<script>
var dom = document.getElementById('barchart-container');
var myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false
});
var app = {};

var option;

let base = +new Date(1988, 9, 3);
let oneDay = 24 * 3600 * 1000;
let data = [
    [base, Math.random() * 300]
];
for (let i = 1; i < 20000; i++) {
    let now = new Date((base += oneDay));
    data.push([+now, Math.round((Math.random() - 0.5) * 20 + data[i - 1][1])]);
}
option = {
    tooltip: {
        trigger: 'axis',
        position: function(pt) {
            return [pt[0], '10%'];
        }
    },
    title: {
        left: 'center',
        text: 'Chart'
    },
    xAxis: {
        type: 'time',
        boundaryGap: false
    },
    yAxis: {
        type: 'value',
        boundaryGap: [0, '100%']
    },
    series: [{
        name: 'Fake Data',
        type: 'line',
        smooth: true,
        symbol: 'none',
        areaStyle: {},
        data: data
    }]
};

if (option && typeof option === 'object') {
    myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);
</script>
<?php
}
?>

<?php
function b4_gradechart()
{
?>
<div class="box" style="height: 200px;">

    <div id="gradechart-container" style="width: 100%;height: 350px;"></div>

</div>
<script>
var dom = document.getElementById('gradechart-container');
var myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false
});
var app = {};

var option;

option = {
    series: [{
        type: 'gauge',
        startAngle: 180,
        endAngle: 0,
        min: 0,
        max: 1,
        splitNumber: 8,
        axisLine: {
            lineStyle: {
                width: 6,
                color: [
                    [0.25, '#FF6E76'],
                    [0.5, '#FDDD60'],
                    [0.75, '#58D9F9'],
                    [1, '#7CFFB2']
                ]
            }
        },
        pointer: {
            icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
            length: '12%',
            width: 20,
            offsetCenter: [0, '-60%'],
            itemStyle: {
                color: 'auto'
            }
        },
        axisTick: {
            length: 12,
            lineStyle: {
                color: 'auto',
                width: 2
            }
        },
        splitLine: {
            length: 20,
            lineStyle: {
                color: 'auto',
                width: 5
            }
        },
        axisLabel: {
            color: '#464646',
            fontSize: 10,
            distance: -60,
            formatter: function(value) {
                if (value === 0.875) {
                    return 'A';
                } else if (value === 0.625) {
                    return 'B';
                } else if (value === 0.375) {
                    return 'C';
                } else if (value === 0.125) {
                    return 'D';
                }
                return '';
            }
        },
        title: {
            offsetCenter: [0, '-20%'],
            fontSize: 30
        },
        detail: {
            fontSize: 20,
            offsetCenter: [0, '0%'],
            valueAnimation: true,
            formatter: function(value) {
                return Math.round(value * 100) + '分';
            },
            color: 'auto'
        },
        data: [{
            value: 0.7,
            name: 'Grade Rating'
        }]
    }]
};

if (option && typeof option === 'object') {
    myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);
</script>
<?php
}
?>

<?php
function b4_linechart()
{
?>
<div class="box">
    <div id="linechart-container" style="height: 400px;margin: 10px;"></div>
</div>

<script>
var dom = document.getElementById('linechart-container');
var myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false
});
var app = {};

var option;

option = {
    title: {
        text: 'title',
        textStyle: {
            color: '#111111'
        }
    },
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            // Use axis to trigger tooltip
            type: 'shadow' // 'shadow' as default; can also be 'line' or 'shadow'
        },
        textStyle: {
            align: 'left'
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis: {
        type: 'value',
        axisLabel: {
            formatter: function(value, index) {
                return value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + '   ';
            },

        }
    },
    yAxis: {
        type: 'category',
        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
    },
    series: [
    {
      name: 'Direct',
      type: 'bar',
      stack: 'total',
      label: {
        show: true
      },
      emphasis: {
        focus: 'series'
      },
      data: [320, 302, 301, 334, 390, 330, 320]
    },
    {
      name: 'Mail Ad',
      type: 'bar',
      stack: 'total',
      label: {
        show: true
      },
      emphasis: {
        focus: 'series'
      },
      data: [120, 132, 101, 134, 90, 230, 210]
    },
    {
      name: 'Affiliate Ad',
      type: 'bar',
      stack: 'total',
      label: {
        show: true
      },
      emphasis: {
        focus: 'series'
      },
      data: [220, 182, 191, 234, 290, 330, 310]
    },
    {
      name: 'Video Ad',
      type: 'bar',
      stack: 'total',
      label: {
        show: true
      },
      emphasis: {
        focus: 'series'
      },
      data: [150, 212, 201, 154, 190, 330, 410]
    },
    {
      name: 'Search Engine',
      type: 'bar',
      stack: 'total',
      label: {
        show: true
      },
      emphasis: {
        focus: 'series'
      },
      data: [820, 832, 901, 934, 1290, 1330, 1320]
    }
  ]
};

if (option && typeof option === 'object') {
    myChart.setOption(option);
}
</script>
<?php
}
?>