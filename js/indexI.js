// Get all the images
image_array = [

'animal sorrindo1.jfif',
'animal sorrindo2.jfif',
'animal sorrindo3.jfif',
'animal sorrindo4.jfif',
'animal sorrindo5.jfif',
'animal sorrindo6.jfif',
'animal sorrindo7.jfif',
'animal sorrindo9.jfif',
'animal sorrindo8.jfif',
'animal sorrindo10.jfif',
'animal sorrindo12.jfif',
'animal sorrindo14.jfif',
'animal sorrindo14.jfif',
'animal sorrindo16.jfif',
'animal sorrindo17.jfif',
'animal sorrindo18.jfif',
'animal sorrindo19.jfif',
'animal sorrindo24.jfif',
'animal sorrindo25.jfif',
'animal sorrindo28.jfif',
'animal sorrindo30.jfif',

]

function get_random_image(){
  // Get a random index
  random_index = Math.floor(Math.random() * image_array.length);

  // Get an image at the random_index
  selected_image = image_array[random_index]

  // Display the image
  document.getElementById('image_shower').src = `Imagens/${selected_image}`
}