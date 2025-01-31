// mobile menu button
const btnMenu = document.getElementById('btn-menu')

btnMenu.addEventListener('click', () => {
  const menu = document.getElementById('site-navigation')
  menu.classList.toggle('open-menu')
  const menuPrimaryContainer = document.querySelector('.menu-primary-container')
  gsap.from(menuPrimaryContainer, {
      opacity: 0,
      y: 50,
      duration: .3,
      ease: 'power2.out'
  })
//  menu.classList.toggle('flex')
})

// membuat dropdown menu menu dekstop
const menu = document.querySelectorAll('.menu-item-has-children')
menu.forEach((item) => {
  item.addEventListener('click', () => {
    const subMenu = item.querySelector('.sub-menu')
    subMenu.classList.toggle('flex')
  })

})

// membuat switch breakpoint class
const menuPrimaryContainer = document.querySelector('.menu-primary-container')