  setImageSize:(file)=>
    console.log file
    image = new Image()
    reader = new FileReader()

    reader.onload = (e)=>
      image.onload = ()=>
        if image.width > image.height
          r = image.height/image.width
          width = @w
          height = @w * r
        else
          r = image.width/image.height
          width = @h * r
          height = @h
        canvas = $('#thumbnail')
          .attr 'width',width
          .attr 'height',height
        ctx = canvas[0].getContext('2d')
        ctx.clearRect 0,0,width,height
        ctx.drawImage image,0,0,image.width,image.height,0,0,width,height
        base64 = canvas[0].toDataURL('image/jpeg')
        img = $('<img>').attr('src',base64)
          .attr('width',width)
          .attr('height',height)
          .attr('class','searchResultImage')
        $(@resultel).append(img)
        canvas.hide()
#        bin = atob base64.split('base64,')[1]
#        len = bin.length
#        barr = new Uint8Array len
#        for i in [0..len]
#          barr[i] = bin.charCodeAt i
#        blob = new Blob [barr],{type:'image/jpeg'}
      image.src = e.target.result
      $(@resultel).css
        'background-color':'#FFFFFF'
        'height':'200px'
        'margin-top':'-250px'
    reader.readAsDataURL file
  