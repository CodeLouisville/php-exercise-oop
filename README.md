# PHP OOP
For this PHP code exercise we will explore [Object Oriented Programming in PHP](http://php.net/manual/en/language.oop5.basic.php) by creating *Shape* classes: `Shape.php`, `Rectangle.php`, and `Circle.php`.
 
`Shape.php` is the *base* class. `Shape` class requirements are:

- A [class constant](http://php.net/manual/en/language.oop5.constants.php) named `SHAPE_TYPE` with a value of `1`.
- Four properties with different [visibilities](http://php.net/manual/en/language.oop5.visibility.php): a *public* `name`, a *protected* `length` and `width`, and a *private* `id`.
- A [constuctor](http://php.net/manual/en/language.oop5.decon.php) which accepts a `length` and `width` parameter to initialize the respective properties.
- The *constructor* shoudl also initialize the `id` property to a unique id. (hint: use PHP's [`uniqid()`](http://php.net/uniqid))
- Getter and Setter methods for the `name` property.
- A Getter method for the `id` property.
- A *public* `area` method which calculates and returns the area of the `Shape` object.
- A *public* *static* `getTypeDescription` method which returns the string `Type: ` with the `SHAPE_TYPE` concatenated to the end.
- A *public* `getFullDescription` method which returns the string: `Shape<#id>: name - length x width` with variables `id`, `name`, `length`, and `width` substituted the objects values.

`Rectangle.php` should inherit from the `Shape` class. `Rectangle` class requirements are:

- A class constant named `SHAPE_TYPE` with a value of `2`.

**Note:** if you used inheritance properly, the `Rectangle` class should not require any properties or methods.

`Circle.php` should inherit from the `Shape` class. `Circle` class requirements are:

- A class constant named `SHAPE_TYPE` with a value of `3`.
- A *protected* `radius` property.
- A constuctor which accepts a `radius` parameter and initializes the `radius` property. **Don't forget to call the `Shape` class constructor.
- A *public* `area` method which calculates and returns the area of the `Circle` object.
- A *public* `getFullDescription` method which returns the string: `Circle<#id>: name - radius` with variables `id`, `name`, and `radius` substituted the objects values.

## Just getting started?
Review the [PHP Code Exercises](https://github.com/CodeLouisville/back-end-php/tree/master/exercises) documentation for more details on performing code exercises.

## Need help?
Jump on the PHP channel in Slack and ask your fellow students and mentors for a hint.