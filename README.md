# ajaxfileupload
simple ajax file upload using jQuery + FileReader (HTML5)

# ajax image upload(canvas + FileReader)
after an image file has been selected,
we populate a temporary image to get the height and width of the image
then we set another temporary image source using the previous image,
and we resize the image
and draw inside a canvas
and set the form data representing the image, by using toDataURL() function of the canvas
