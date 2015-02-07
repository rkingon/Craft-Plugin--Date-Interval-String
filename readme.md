# Date Interval String for Craft

Takes a string & turns it into a ISO 8601 Interval Stirng. Useful for time duration properties for schema.org

See here: https://schema.org/totalTime

## Usage

####As a Filter
`{{ "15 Minutes" | dateIntervalString }}`

`{{ someVariable | dateIntervalString }}`

## Example
`<time datetime="{{ "15 minutes" | dateIntervalString }}" itemprop="totalTime">15 minutes</time>`

Compiles to:

`<time datetime="PT15M" itemprop="totalTime">15 minutes</time>`