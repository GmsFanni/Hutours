const {test, expect} = require('@jest/globals')
const veryemail = require('./verifyemail')
const verifyemail = require('./verifyemail')

test("email cím ellenőrzése tartalmazzon @ jelet",()=>{
    let flag = verifyemail("gemesifanni")
    expect(flag).toBe(false);

})

test("email cím ellenőrzése tartalmazzon . jelet",()=>{
    let flag = verifyemail("gemesi@fanni")
    expect(flag).toBe(false);

})

test("email cím ellenőrzése tartalmazzon @ és . jelet",()=>{
    let flag = verifyemail("gemesi@fanni.com")
    expect(flag).toBe(true);

})