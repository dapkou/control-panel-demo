// *************************************
// 
//  a day
// *************************************
const lineChart_day = document.getElementById("chart_steamTrap_2");
const currentTime = new Date(); // 獲取當前時間
const labels = []; // 儲存標籤數據

// 生成 24 小時標籤
for (let i = 0; i < 24; i++) {
  const hour = (currentTime.getHours() + i) % 24; // 計算每小時值
  const label = hour.toString().padStart(2, "0") + ":00"; // 將小時轉換為標籤格式，例如 "01:00"
  labels.push(label); // 將標籤加入[]中
}
const lineChartData_hour = new Chart(lineChart_day, {
  type: 'line',
  data: {
    labels: labels, // 使用生成的標籤
    datasets: [{
      data: [28.400, 28.375, 28.275, 28.30, 28.30, 28.30, 28.400, 28.400, 28.400, 28.400, 28.400, 28.400, 28.30, 28.325, 28.325, 28.375, 28.425, 28.30, 28.30, 28.400, 28.375, 28.30, 28.400, 28.250],
      label: "",
      yAxisID: "value",
      borderColor: "rgb(251, 189, 10)",
      backgroundColor: "rgba(251, 189, 10, 0.5)",
      borderWidth: 1,
      fill: false,
      tension: 0.1,
      pointStyle: 'circle',
      pointRadius: 6,
      pointHoverRadius: 12,
    }]
  },
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: [{
        beginAtZero: false,
        ticks: {
          callback: function (value, index, values) {
            return value.toFixed(3);
          }
        }
      }]
    }
  }
});



// *************************************
// 
// 1hr
// *************************************

const lineChart_hour_3 = document.getElementById("chart_steamTrap_3");
const currentTime_3 = new Date();
const labels_3 = [];

for (let i = 0; i < 13; i++) {
  const hour = (currentTime_3.getHours() + Math.floor(i / 12));
  const minute = (i % 12) * 5;
  const label = hour.toString().padStart(2, "0") + ":" + minute.toString().padStart(2, "0");
  labels_3.push(label);
}

const lineChartData_hour_3 = new Chart(lineChart_hour_3, {
  type: 'line',
  data: {
    labels: labels_3,
    datasets: [{
      data: [28.30, 28.325, 28.325, 28.375, 28.425, 28.30, 28.30, 28.400, 28.375, 28.30, 28.400, 28.250, 28.375, 28.275, 28.30, 28.30, 28.30, 28.400, 28.400, 28.400, 28.400, 28.400, 28.400, 28.30, 28.325, 28.325, 28.375, 28.425, 28.30, 28.30, 28.400, 28.375, 28.30, 28.400,],
      label: "",
      yAxisID: "value",
      borderColor: "rgb(251, 189, 10)",
      backgroundColor: "rgba(251, 189, 10, 0.5)",
      borderWidth: 1,
      fill: false,
      tension: 0.1,
      pointStyle: 'circle',
      pointRadius: 6,
      pointHoverRadius: 12,
    }]
  },
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      xAxes: [{
        ticks: {
          maxRotation: 0,
          autoSkip: true,
          maxTicksLimit: 24
        }
      }],
      yAxes: [{
        beginAtZero: false,
        ticks: {
          callback: function (value, index, values) {
            return value.toFixed(3);
          }
        }
      }]
    }
  }
});

// *************************************
// 
// 7days
// *************************************

//設備資料分析頁面：
const barChart_1 = document.getElementById("bar_chart_steamTrap_hour_1");
const barChartData_hour = new Chart(barChart_1, {
  type: 'bar',
  data: {
    labels: ["2023-06-15 11", "2023-06-15 12", "2023-06-15 13", "2023-06-15 14",
      "2023-06-15 15", "2023-06-15 16", "2023-06-15 17", "2023-06-15 18",
      "2023-06-15 19", "2023-06-15 20", "2023-06-15 21", "2023-06-15 22",
      "2023-06-15 23", "2023-06-15 00", "2023-06-15 01", "2023-06-15 02",
      "2023-06-15 03", "2023-06-15 04", "2023-06-15 05", "2023-06-15 06",
      "2023-06-15 07", "2023-06-15 08", "2023-06-15 09", "2023-06-15 10"
    ],
    datasets: [
      {
        //設備1
        label: "設備一", //設備名稱
        backgroundColor: "#3e95cd",
        data: [133, 221, 783, 2478, 133, 221, 783, 2478, 133, 221, 783, 2478, 133, 221, 783, 2478, 133, 221, 783, 2478, 133, 22, 1, 0]
      },
      {
        //設備2
        label: "設備二",
        backgroundColor: "#8e5ea2",
        data: [408, 547, 675, 734, 133, 221, 783, 408, 547, 675, 734, 133, 221, 783, 408, 547, 675, 734, 133, 221, 783, 5, 9, 70]
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Population growth (millions)'
    }
  }
});
