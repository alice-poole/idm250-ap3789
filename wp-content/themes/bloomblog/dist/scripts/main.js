let gold = GoldenRod;
let green = DarkOliveGreen;
let pink = LightPink;
let blue = DarkSlateBlue;
let purple = DarkMagenta;

const colors = [gold, green, pink, blue, purple];

acf.add_filter('color_picker_args', function( args, field ){

    // do something to args
    args.palettes = colors
    // return
    return args;    

});