## Generation ##

```
$wsdl = new WSDLDocument( "MyClass" );
echo $wsdl->saveXml();
```

The first argument is the name of the service class. If you are using [SOA](http://wikipedia.org/wiki/Service-oriented_architecture) in your application it will be easy, otherwise this is a good time to start.

The second argument is the url of webservices request handler. You have to prepare your application to accept a SOAP request. The default value of this argument is current url. If you use the default value make sure that your application can response soap action and WSDL in the same URL.

The third argument is the target namespace. If you don't know what it is forget it.

Before to try to generate the WSDL you must document the classes. See next section.

## Preparing Classes ##

### Service Class ###

You have to save the type of return and arguments. You can do it using "@param" and "@return" tag comments.

```
/**
 * Service class documentation.
 */
class MyClass
{

    /**
     * Method documentation.
     *
     * @param string
     * @param MyStruct it works with complex types, see above how to prepare a complex class
     * @param integer[] simple array of integer
     * @param float[][][] array of array of array of float
     * @param boolean
     * @return MyStruct[] array of MyStruct Class
     */
    public function justSample(){}

}
```

### Complex Type Class ###

Like services you can use the tag "@var" to specific the type of property.

```
class MyStruct
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var integer[]
     */
    public $anotherProperty;

}
```