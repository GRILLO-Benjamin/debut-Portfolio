let items = document.querySelectorAll('.fas')
let lefticon = document.querySelector('#icon1')
let righticon = document.querySelector('#icon3')


items.forEach((item)=>{
    item.addEventListener('mouseenter', () => {
      item.style.color = 'rgb(223, 167, 242)'
      item.style.transform = 'rotate(0)'
      item.style.transition = '.8s'
    })
    })

items.forEach((item)=>{
    item.addEventListener('mouseleave', () => {
      item.style.color = 'white'
      if(item === lefticon){
        item.style.transform = 'rotate(-45deg)'
      }if(item === righticon){
          item.style.transform = 'rotate(45deg)'
      }
    })
    })