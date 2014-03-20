//
//  RTCityPickerField.m
//  CityDemo
//
//  Created by ricky on 14-3-20.
//  Copyright (c) 2014年 ricky. All rights reserved.
//

#import "RTCityPickerField.h"

@implementation RTCityPickerField

- (void)commonInit
{
    UIPickerView *pickerView = nil;
    self.inputView = pickerView;
}

- (id)initWithCoder:(NSCoder *)aDecoder
{
    self = [super initWithCoder:aDecoder];
    if (self) {
        [self commonInit];
    }
    return self;
}

- (id)initWithFrame:(CGRect)frame
{
    self = [super initWithFrame:frame];
    if (self) {
        // Initialization code
        [self commonInit];
    }
    return self;
}

@end
