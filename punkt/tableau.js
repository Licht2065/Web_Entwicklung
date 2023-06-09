const canvas = document.querySelector("canvas");
            const ctx = canvas.getContext("2d");
            let canvas_width = canvas.width
            let canvas_heigth = canvas.height
            let shapes =[];
            let startX;
            let startY;
            let element = document.getElementById("result")
            shapes.push({
                x:40, y:50, width: 150,height:50,color:'red'
            });
            let  current_shape_index = null;
            let is_dragging = false;
            
            let is_mouse_in_shape = function(x,y,shape){
                let shape_left = shape.x;
                let shape_right = shape.x + shape.width;
                let shape_top = shape.y;
                let shape_bottom = shape.y + shape.height;
                console.log(y,shape_bottom)
                console.log(y,shape_top)
                console.log(x,shape_right)
                console.log(y,shape_left)

                console.log (x > shape_left && x < shape_right && y > shape_top && y < shape_bottom)
                if(x > shape_left && x < shape_right && y > shape_top && y > shape_bottom){
                    return true;
                }
                else if(x > shape_left && x < shape_right && y > shape_top && y < shape_bottom){
                    return true;
                }
                else if(x > shape_left && x > shape_right && y > shape_top && y > shape_bottom){
                    return true;
                }
                return false;
                
    
            }
            let mouse_down  = function(event){
                event.preventDefault();
                startX = parseInt(event.clientX);
                startY = parseInt(event.clientY);
                
                let  index = 0;
                for(let shape of shapes){
                    if(is_mouse_in_shape(startX,startY,shape)){
                        current_shape_index = index;
                        is_dragging = true;
                        return;
                    }
                    index++;
                }
    
            }
            let mouse_up = function(event){
                if(!is_dragging){
                    return;
                }
                event.preventDefault();
                is_dragging = false;
            }
            let mouse_out = function(event){
                console.log("1");
                if(!is_dragging){
                    return; 
                }
                event.preventDefault();
                is_dragging = false;
            }
           let mouse_move = function(event){
            console.log("2");

                if(!is_dragging){
                    return;
                }
                else{
                    
                    console.log(is_dragging)
    
                    event.preventDefault();
                    let mouseX = parseInt(event.clientX);
                    let mouseY  = parseInt(event.clientY);
                    let dx = mouseX - startX;
                    let dy = mouseY -startY;
                    let currrent_shape = shapes[current_shape_index]
                    currrent_shape.x += dx;
                    currrent_shape.y +=dy;
                    draw_shapes();
                    startX = mouseX;
                    startY = mouseY;
                    element.innerHTML ="X: " + currrent_shape.x  + " Y: " + currrent_shape.y;  

                }
            }
    
            canvas.onmousedown = mouse_down;
            canvas.onmouseout = mouse_out;
            canvas.onmouseup = mouse_up;
            canvas.onmousemove = mouse_move;
            let draw_shapes = function(){
                ctx.clearRect(0,0,canvas_width,canvas_heigth);
                for(let shape of shapes){
                    ctx.font = "20px Arial";
                    ctx.fillText("A",shape.x + 10,shape.y + 20)
                    ctx.beginPath()
                    ctx.arc(shape.x,shape.y,10,0,2*Math.PI,false)
                    ctx.fill()
                    ctx.stroke()
                    
                    
                    
                }
                number = 0
                for(let i = 0; i < 10; i ++){
                    ctx.moveTo(number,0);
                    ctx.lineTo(number,canvas_heigth);
                    ctx.stroke();
                    number += 50
                }
                number = 0
                for(let i = 0; i < 10; i ++){
                    ctx.moveTo(0,number);
                    ctx.lineTo(canvas_width,number);
                    ctx.stroke();
                    number += 50
                }
                
                
            }
            draw_shapes()