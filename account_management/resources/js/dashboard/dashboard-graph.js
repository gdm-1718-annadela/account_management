import p5 from 'p5';

let elDashboardGraph = document.querySelector('.js-dashboard-graph');
let cnv;

const lines = [
    {
        color: '#F55677',
        points: [50, 77, 30, 5, 45, 60, 37, 30, 5, 45, 60, 37]
    },
    {
        color: '#728AE2',
        points: [69, 32, 2, 19, 70, 93, 13, 47, 82, 60, 1, 100]
    },
    {
        color: '#F28C4A',
        points: [53, 47, 25, 7, 4, 1, 39, 28, 58, 20, 71, 88]
    },
    {
        color: '#A9498E',
        points: [25, 16, 34, 40, 11, 13, 50, 75, 71, 86, 35, 6]
    },
]

let firstLoop = true;

if (elDashboardGraph) {
    console.log('on dashboard')
}

const sketch = (s) => {
    s.setup = () => {
        cnv = s.createCanvas(400, 200);
        cnv.parent(elDashboardGraph)
    }

    s.draw = () => {
        let w = parseInt(window.getComputedStyle(elDashboardGraph).width)
        let h = parseInt(window.getComputedStyle(elDashboardGraph).height)
        s.resizeCanvas(w, h);

        s.background(255)
        s.translate(0, s.height);
        s.scale(1, -1);
        s.noFill();

        s.stroke('#DFDFDF')
        s.strokeWeight(1)
        let amountOfMonthsToShow = 12
        for (let i = 0; i < amountOfMonthsToShow; i++) {
            if (i !== 0 && i !== amountOfMonthsToShow-1) {
                s.line(w/(amountOfMonthsToShow-1) * i, 0, w/(amountOfMonthsToShow-1) * i, s.height)
            }
        }

        s.strokeWeight(5)
        lines.forEach(line => {
            if (firstLoop) {
                console.log(line);
            }
            s.stroke(line.color)
            s.beginShape()
    
            // entry vertex
            s.curveVertex(-50, s.height/2)
    
            line.points.forEach((p, i) => {
                s.curveVertex(w/(line.points.length-1) * i, h * (p/100))
    
                // label points
                // s.point(w/(points.length-1) * i, h * (p/100))
            });
    
            // exit vertex
            s.curveVertex(s.width + 50, s.height/2)
    
            s.endShape()
        });

        firstLoop = false
    }
}

const sketchInstance = new p5(sketch);