# hacklist-generator
 Creates hacklists

This is for personal use, the goal of this piece of code is to generate a sequence of words from an array, in order to make up an list which I can then use test train people.
This list has to follow a certain order, as some words(hacks), can't be used with one another.

## Desired features:
> - Being able to generate easy, normal and hard trainings
> - Make sure that ever list follow the protocol that's discribed in 'EXAMPLE A'
> - Being able to store certain lists which you find particulairly usefull in an database, and then retrieve them at will instead of having to generate a new one
> - Being able to fill in people's answers, for it to automaticaly calculate the score. This scoring has to follow the protocol that' that's discribed in 'EXAMPLE B'

###### EXAMPLE A:
```
speed, timer, bhop can't be combined
```

###### EXAMPLE B:
```
Correct answer:                     +1
Incorrect answer:                   -1
Legit (if correct):                 +1
Legit (if incorrect):                0
Clickaura or TB instead of FF:    +0.5
Clickaimbot or TB instead of KA:  +0.5
```

