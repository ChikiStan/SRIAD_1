let ctx = document.querySelector('#myChart').getContext('2d');
ctx.canvas.parentNode.style.height="450px";
let myChart = new Chart (ctx, {
    type: 'line',
    data: {
    labels: [10, 20, 30, 40, 50],
    datasets: [{
        label: 'Результаты экспериментов',
        data: [20, 40, 25, 15, 10],
        backgroundColor: ['white'],
        borderColor: [
            '#105492',
            '#105492',
            '#105492',
            '#105492',
            '#105492',
        ],
        borderWidth: 3
    }],
    },
    options: {
        maintainAspectRatio: false,
    }
})

