# PHP Type Juggling Bug

This repository demonstrates a common error in PHP related to type juggling in arithmetic operations.  The `calculateSum` function is designed to sum an array of numbers. However, due to PHP's loose typing, if the array contains a string that resembles a number but isn't purely numeric, the behavior is unexpected.  The bug and its solution are showcased in separate files.

## Bug Description

PHP's implicit type conversion can lead to incorrect results when performing arithmetic operations on mixed data types.  The example code illustrates how a string within a numeric array causes unexpected summation behavior.

## Solution

The solution ensures strict type checking before performing the summation. This prevents unintended type coercion and maintains the accuracy of the results.