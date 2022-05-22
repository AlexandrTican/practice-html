<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <?php
  require('php/menu.php');
  ?>

  <main class="contents">
    <h1>Melty Blood/Advanced Mechanics</h1>
    <p>Damage Modifier</p>
    <div>
      The damage modifier system works much like Act Cadenza. Each character
      has a set life total of 11400, but take different amounts of damage at
      different points of their life bars. Another thing to note is that there
      is a Stance Modifier that changes the Damage modifier depending on if
      the character is in Stand, Crouch, or Jump state. These are the values
      for the Stance Modifier:
      <ul>
        <li>Jump: x0.88</li>
        <li>Stand: x1.00</li>
        <li>Crouch: x1.08</li>
      </ul>
      These values modify the <b>Damage Modifier</b> during combos, as well.
      For example, if you combo them on the ground, then knock them in the
      air, they will get the Jump Stance modifier when they are in the air.
      Damage Modifier values are consistent across all moon styles for every
      character except Mech-Hisui, Nero, and Neco-Mech. For the Maids (Hisui &
      Kohaku) team characters, they each have their own Damage Modifiers.
    </div>
    <p>Correction Value</p>
    <span>
      When starting a combo, one factor to keep in mind is
      <b>Correction Value</b> (also referred to as <b>proration</b>). This
      value, among other factors, determines how much damage any individual
      hit in a combo will deal. Formally, the correction value is a value in
      the interval between 0% and 100% that can only ever decrease or remain
      the same as a result of a hit.
      <div>
        Most hits have a modifier that acts as an upper clamp on the
        correction value, setting the correction value to the fixed modifier
        if the fixed modifier is lower (i.e. closer to 0), or leaving it alone
        otherwise. Some hits have a scaling multiplier that always decreases
        the current correction value by some factor (less than one).
        Cancelling any special move into an EX move or Arc Drive super adds a
        65% scaling multiplier. An OTG relaunch (distinct from a normal OTG
        hit) also concurs with a 65% scaling multiplier. All of these updates
        to the correction value occur after the hit's damage is calculated; as
        a consequence, the damage that an individual hit is not affected by
        how it changes the correction value.
      </div>
      <b> The Reverse Penalty</b> is a value closely related to the correction
      value. It inhabits the interval between 0% and 55%. Unlike the
      correction value, the reverse penalty is not tied to a specific combo,
      and exists throughout the game and changes in response to the actions
      that a character takes. By default the reverse penalty is 0%. It can
      increase as a result of specific actions being taken, such as performing
      a reverse beat (adds 22.5% reverse penalty), cancelling shield or
      EX-shield into something other than another shield (40% for actions that
      can only be done out of EX-shield, 30% for actions that can be done out
      of either), or even performing multiple jabs in quick succession (adds
      0.8% reverse penalty).
      <div>
        After taking an action that raises the reverse penalty, it remains at
        that value for a duration proportional to the amount by which it was
        raised, then decreases linearly towards 0 again. The significance of
        the reverse penalty is its role in determining correction value: if
        the correction value is greater than the reverse penalty minus one, it
        is set to that value. Notably, unlike the ways mentioned before, it
        updates the correction value before the hit's damage is calculated.
      </div>
    </span>
    <p>Reduce</p>
    <span>You can <b>Reduce</b> by pressing A, B, C or D in a 5 frame window as
      you get hit, this reduces incoming damage by 30%.
    </span>
    <div>
      The window for damage reducing is <b>3 frames</b> from before you get
      hit to 1 frame after being hit, with 9 to 4 frames before being hit
      counting as failed reduce.
    </div>
    <p>Critical Hit</p>
    <div>
      There's also a mechanic in Melty Blood called <b>Critical Hit</b>. It
      happens randomly on any hit and will multiply the damage dealt by 1.15x.
    </div>
    <p>Wakeup Timings</p>
    <!-- you may add more stuff later...-->
  </main>
</body>

</html>