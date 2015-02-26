#### Installation
Move the ```reeferrer``` folder into your ```system/expressionengine/third_party/``` folder. 

#### Usage
The plugin matches any string from an incoming request, by evaluating the HTTP Referer [sic] value by way of PHP's ```$_SERVER['HTTP_REFERER']``` value.

Use it in the positive:

```
{if '{exp:reeferrer:is from="google.com"}'}
	Welcome, Googlers!
{/if}
```

Use it in the negative:

```
{if '{exp:reeferrer:isNot from="google.com"}'}
	You didn't come from Google.
{/if}
```

And if conventions aren't already confusing enough, not the name of this plugin. It's not "referer" like you'd think; it's not "referrer" like you may also think; it's actually "reeferrer""


![dwi](http://www.sillygif.com/media/gif/1414618201.gif)
