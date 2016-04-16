# 0.6 #

  * fixed: complex type missing when referenced twice in a script
  * fixed: Missing Array types, in [revision 22](https://code.google.com/p/wsdldocument/source/detail?r=22) (thanks jkufner)
  * force utf-8 encoding in DOMDocument


---



# 0.5 #

  * fixed: Missing type definition for objects in arrays (thanks Schirkan)
  * fixed: Native array, e.g. "string[.md](.md)" would be translated into "tns:string[.md](.md)" - should be "xsd:string[.md](.md)" (thanks Magnus Pienkny)
  * fixed: Duplicated port in soapAction in some cases


---


# 0.4 #

  * Added an extra check to verify declared and documented method arguments quantity.
  * fixed: Array of native types, it was generating native type instead of native array. (thanks Herbert Souza)


---


# 0.3 #

  * Added native PHP array type. You may use "array" or "struct" to use this type. The WSDL generated uses [soap-enc:Array](http://www.w3.org/TR/2000/NOTE-SOAP-20000508/#_Toc478383522) definition.
  * Second argument WSDLDocument's constructor is not required. The default value of Soap Action URL is the current without parameters.


---


# 0.2 #

  * Added documentation tags for class and methods/operations
  * Allowed array of array for native and complex type (thanks Diogo Moreira)
  * fixed: Non public, static, constructor or magic methods could not go to WSDL
  * fixed: Non public or static properties of complex types could not go to WSDL


---


# 0.1 #

  * first release