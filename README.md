<h1>
Some of the PHPs Object Model Features: Interfaces, Traits and Abstract Classes
</h1>

<p>
When we talk about <em>Object Oriented Programming</em> in <em>PHP</em>, there are three most exciting features out of the complete object model get into involve frequently in many applications and these are <i><strong>Interfaces</strong></i>, <i><strong>Traits</strong></i> and <i><strong>Abstract Classes</strong></i>. Literally, the concept of Interface and Abstract in PHP is quite relevant to the concept of those in other OOP languages. But Traits in PHP is something different.
</p>

<p>
<i>
According to the PHP documentation, <strong>Traits</strong> are a mechanism for code reuse in single inheritance languages such as PHP. Purposely,Traits are introduced in PHP language to resolve the limitation of single inheritance and to give a flavor of multiple inheritance. Unlike other OOP languages, PHP does not support the concept of multiple inheritance. To be precise, in PHP a child class can not be derived from more than one parent classes. Consequently, Traits are the strategy for playing an important role in PHP to get rid of the situation. Basically, a Trait can be defined by the use of <strong>trait</strong> keyword and it can be inserted within a class by the use of <strong>use</strong> keyword. Nevertheless, Traits can not be instantiated by their own during their life time. Last but not least, Traits can define both properties and methods, but they can not define constants.
</i>
</p>

<p>
As of PHP 5, the concept of a Trait represents a set of methods and properties that can be used to extend the functionality of a class. Furthermore, the internal mechanism for combining Traits and Classes is designed in such a way that, it reduces complexity as well as provides the opportunity for producing more standard and readable code. It is mention able that I have dedicated an article only on Traits, so I am not going in details on Traits during the discussion of the examples. However, if somebody is further interested then please, have a look at the article by this <i><a href="https://medium.com/@annuhuss/traits-in-php-80af101e92a1"><strong>Link</strong></a></i>.
</p>

<p>
Now, let’s talk about some of the important characteristics of Interfaces and Abstract classes. According to the PHP documentation:
</p>

<p>
<i>
An <strong>Interface</strong> is the mechanism of specifying which methods a class must implement without telling how these methods are going to be implemented. To be precise, an Interface may consist of only undefined methods, the methods which do not obtain a body. Moreover, an Interface is defined by the use of <strong>interface</strong> keyword and all the methods consists of an Interface must be public, which is the nature of an Interface. An Interface can extend more than one Interfaces by the <strong>extends</strong> operator and a class can implement more than one Interfaces with the use of <strong>implements</strong> operator. For both cases, if it is needed, a comma separator may be used. Last but not least, an Interface can use constants in the same way as a class do except they can not be overridden by an Interface or a class that inherits them.
</i>
</p>

<p>
<i>
On the other hand, the class that consist of at least one abstract method is known as <strong>Abstract class</strong>. An Abstract class is defined by the <strong>abstract</strong> in conjunction with <strong>class</strong> keywords. In fact, an abstract method of an Abstract class is simply declared by it’s signature. Now what is the <strong>abstract method</strong>, we meant above? A method that does not obtain any implementation, more specifically, a method that does not hold a body, is known as abstract method. Additionally, all the abstract methods of an Abstract class must be defined by the <strong>abstract</strong> keyword.
</i>
</p>

<p>
In the PHP documentation it also says, an Abstract class may not be instantiated, they only can be extendable by other classes. By the way, we may invoke a non abstract method of an Abstract class without extending it by other classes. For example, a non-abstract static method of an Abstract class can be invoked by itself. Generally, an Abstract class is partially implemented, means that, it may be consist of both abstract and non-abstract methods. Last but not the least, if an Interface is first implemented by an Abstract class and the Abstract class is further extended by another class except any Abstract class then, all the abstract methods must be implemented by that class. During this procedure, if a method of the Interface is not implemented by the Abstract class then either the method can be totally avoided, by not showing it within Abstract class or it can be defined by using abstract keyword. Looks a bit clumsy, hmm! Don't worry, we will see this scenario by the aid of last example.
</p>

<p>
In this article, I am going to introduce a number of examples by discussing some basic functionalities of Interfaces, Traits and Abstract classes . The examples are sequentially as follows:
</p>

<p>
<ul>
<li><strong>interface.php</strong></li>
<li><strong>interface_trait.php</strong></li>
<li><strong>abstract_trait.php</strong></li>
<li><strong>interface_abstract_trait.php</strong></li>
</ul>
</p>

<p>
</p>
<p>
</p>

<p>
<i>
Stars from the audience would be always appreciated.
</i>
</p>

<p>
</p>

<p>
<i>
A detail illustration of this topic and some of my other articles on different topics can be reached by
<a href="https://medium.com/@annuhuss/">the medium blog site</a>.
</i>
</p>
