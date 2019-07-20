<h1>
Some of the PHP's Object Model Features: Interfaces, Traits and Abstract Classes
</h1>

<p>
When we talk about <em>Object Oriented Programming</em> in <em>PHP</em> there are three most exciting features out of the complete object model get into involve frequently in many applications and these are <i><strong>Interfaces</strong></i>, <i><strong>Traits</strong></i> and <i><strong>Abstract Classes</strong></i>. Literally, the concept of Interface and Abstract in PHP is quite similar as it is in other OOP languages. <i>But the <strong>Trait</strong> in PHP is something different which is introduced to resolve the limitation of single inheritance and to give a flavor of multiple inheritance. To be precise, PHP does not support the mechanism of a child class that is derived from more than one parent classes. Consequently, Trait is the feature that come to play an important role in PHP to get rid of the situation</i>.
</p>

<p>
Although, as of PHP 5, the features of Trait are somehow a compensation to the functionalities of multiple inheritance. <i>Nevertheless, by using Traits, we can manage the requirement of multiple inheritance in PHP with the use of <strong>use</strong> keyword</i>. Additionally, we can even give a more compact form to our code by the support of Traits which can be seen by this article through some consecutive examples. It is mention able that I have dedicated an article only on Traits, so I am not going in details on Traits here. But if somebody is further interested then please have a look by this <i><a href="https://medium.com/@annuhuss/traits-in-php-80af101e92a1"><strong>Link</strong></a></i>. However, a majority of the examples I am going to discuss today are also involved by the feature of PHP Trait.
</p>

<p>
Now, let's first talk about some of the important characteristics of Interfaces and Abstract classes. According to the PHP documentation:
</p>

<p>
<i><strong>An Interface</strong> is the mechanism of specifying which methods a class must implement without telling how these methods are going to be implemented. In short, an Interface may consist of only undefined methods. Moreover, an Interface is defined by the use of <strong>interface</strong> keyword and all the methods consists of an Interface must be public, which is the nature of an Interface. An Interface can extend more than one Interfaces by the <strong>extends</strong> operator and a class can implement more than one Interfaces with the aid of <strong>implements</strong> operator. For both cases, a comma separator may be used. Last but not least, an Interface can use constants in the same way as a class do except they cannot be overridden by an Interface or a class that inherits them</i>.
</p>

<p>
<i>On the other hand, a class that consist of with at least one abstract method is known as an <strong>Abstract class</strong>. It is defined by the <strong>abstract</strong> in conjunction with <strong>class</strong> keyword and the abstract method that it having also need to use the abstract keyword in its signature. Furthermore, it is not a requirement for an Abstract class to have any abstract method. In the documentation it also says, you may not allow to instantiate an Abstract class. By the way, you may invoke some non abstract method of an Abstract class without extending it. For example, a static method defined by an Abstract class can be invoked by itself. Therefore, an Abstract class may be consist of both abstract and non abstract methods. Which indicates that Abstract classes are partially implemented by them-self. Last but not the least, if an Abstract class implements an Interface then the methods of the Interface either all or some of them can be implemented by the Abstract class, but if not, then the class which further extends the Abstract class must implement all the abstract methods of the Abstract class (whether its own or those from the Interface). To be clarified, the methods of an Interface usually become abstract methods if they are not implemented by the Abstract class</i>.
</p>

<p>
To focus on to the functionalities of <i>Interfaces</i>, <i>Traits</i> and <i>Abstract classes</i> I am going to introduce a number of examples through this article, which are sequentially as follows:
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
<i>
A detail illustration on this topic and some of my other Object-Oriented-Programming articles can be found in 
<a href="https://medium.com/@annuhuss/">the medium blog site</a>.
</i>
</p>